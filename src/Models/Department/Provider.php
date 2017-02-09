<?php

namespace Models\Department;

use Models\Department\Company;
use Models\Department\Member;
use Models\Department\User;
use Models\Requisition\ProviderRequisition;
use Models\Requisition\Tender;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
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
		"user_id" => "required|integer",
		"company_id" => "required|integer"
    ];
    
    public function company()
    {
		return $this->belongsTo(Company::class, "company_id");
    }

    public function tenders()
    {
		return $this->hasMany(Tender::class);
    }

    public function providerRequisitions()
    {
		return $this->hasMany(ProviderRequisition::class);
    }

    public function user()
    {
		return $this->belongsTo(User::class, "user_id");
    }

    public function members()
    {
		return $this->hasMany(Member::class);
    }
}
