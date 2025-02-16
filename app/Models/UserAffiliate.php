<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserAffiliate extends Authenticatable
{
    use Notifiable;

    protected $table = 'user_affiliates';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'referral_link',
    ];
}
