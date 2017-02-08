<?php

namespace Core\Src\Models\Department;

use Core\Src\Models\Department\Member;
use Core\Src\Models\Department\Provider;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        "username",
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];
    protected $guarded = [
        "created_at",
        "updated_at"
    ];
    protected $dates = [
        "created_at",
        "updated_at"
    ];
    protected $rules = [
        "username" => "required|max:50",
        "email" => "required|max:100",
        "name" => "required|max:100",
        "password" => "required|max:255"
    ];

    public function providers()
    {
        return $this->hasMany(Provider::class);
    }

    public function member()
    {
        return $this->hasMany(Member::class);
    }
}
