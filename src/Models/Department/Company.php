<?php

namespace Models\Department;

use Models\Department\Branch;
use Models\Department\Provider;
use Models\Requisition\Requisition;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = true;
    protected $fillable = [
		"name"
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
		"code" => "required|max:10",
		"name" => "required|max:100",
    ];

    public function branches()
    {
		return $this->hasMany(Branch::class);
    }

    public function requisitions()
    {
		return $this->hasMany(Requisition::class);
    }

    public function providers()
    {
		return $this->hasMany(Provider::class);
    }
}
