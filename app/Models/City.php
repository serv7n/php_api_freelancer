<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    protected $table = 'cities';

    public function states(): BelongsTo
    {
        return $this->belongsTo(State::class, 'id', 'state_id');
    }
}
