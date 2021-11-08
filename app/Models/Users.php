<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Users extends Model
{
    use HasFactory, Notifiable;
    use HasRoles;

    public $timestamps = true;

    protected $fillable = ['name', 'email', 'password',];

    protected $hidden = ['password','remeber_token',];

    protected $casts = ['email_verified_at' => 'datetime',];
}
