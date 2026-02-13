<?php

namespace App\Enum;

enum Role: String
{
    case USER = 'user';
    case FREELANCER = 'freelancer';
    case ADMIN = 'admin';
}
