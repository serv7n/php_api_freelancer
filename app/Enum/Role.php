<?php

namespace App\Enum;

enum Role: String
{
    case USER = 'user';
    case FREELANCER = 'freelancer';
    case ADMIN = 'admin';


    public function is_admin(){

    }

}
