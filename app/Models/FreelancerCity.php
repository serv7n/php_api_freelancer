<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FreelancerCity extends Model
{
    protected $table = 'freelancer_cities';

    public function freelancer()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function city(): HasOne
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }

}
