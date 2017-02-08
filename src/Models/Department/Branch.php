<?php

namespace Core\Src\Models\Department;

use Core\Src\Models\Department\Company;
use Core\Src\Models\Requisition\Requisition;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
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
		"company_id" => "required|integer"
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, "company_id");
    }

    public function requisitions()
    {
        return $this->hasMany(Requisition::class);
    }
}
