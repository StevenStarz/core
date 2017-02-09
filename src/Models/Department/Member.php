<?php

namespace Models\Department;

use Models\Department\Provider;
use Models\Department\User;
use Models\Requisition\Applicant;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	public $timestamps = true;
    protected $fillable = [];
    protected $guarded = [
		"created_at",
		"updated_at"
    ];
    protected $dates = [
		"created_at",
		"updated_at"
    ];
    protected $rules = [
		"provider_id" => "required|integer",
		"user_id" => "required|integer"
    ];

    public function user()
    {
		return $this->belongsTo(User::class, "user_id");
    }

    public function provider()
    {
		return $this->belongsTo(Provider::class, "provider_id");
    }

    public function applicants()
    {
		return $this->hasMany(Applicant::class);
    }
}
