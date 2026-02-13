<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->foreignId("client_id")->constrained("users")->onDelete('cascade');
            $table->foreignId("freelancer_id")->constrained("users")->onDelete('cascade');
            $table->foreignId("city_id")->constrained("cities")->onDelete('cascade');
            $table->enum("status",["pendente", "aceito", "completo", "cancelado"])->default("pendente");
            $table->timestamp("scheduled_date");
            $table->decimal("hourly_rate",10,2);
            $table->timestamps();
        });
    }

//- title
//- description
//- user.id(client)
//- user.id(freelancer)
//- skill_id
//- city_id
//- status (pendente, aceito, completo, cancelado)
//- scheduled_date
//- hourly_rate
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
