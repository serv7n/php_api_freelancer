<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FreelancerSkill extends Model
{
    protected $table = 'freelancer_skills';

    public function freelancer()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function skill(){
        return $this->hasOne(Skill::class, "id", "skill_id");
    }
}
