<?php

namespace Pradeep-sati12\PasswordChangedNotificationMail\tests\Models;
use Pradeep-sati12\PasswordChangedNotificationMail\Traits\PassworChangedNotificationTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Backpack\CRUD\app\Models\Traits\CrudTrait; // <------------------------------- this one
use Spatie\Permission\Traits\HasRoles;// <---------------------- and this one
use Pradeep-sati12\PasswordChangedNotificationMail\Contracts\PassworChangedNotificationContract;
class User extends Authenticatable implements PassworChangedNotificationContract
{
    use HasApiTokens, HasFactory, Notifiable,PassworChangedNotificationTrait;
	 use CrudTrait; // <----- this
    use HasRoles; // <------ and this
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
}
