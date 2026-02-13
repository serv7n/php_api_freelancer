<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class State extends Model
{
    public function cities()
    {
        return $this->hasMany(City::class, 'state_id');
    }
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
