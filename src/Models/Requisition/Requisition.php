<?php

namespace Core\Src\Models\Requisition;

use Core\Src\Models\Department\Branch;
use Core\Src\Models\Department\Company;
use Core\Src\Models\Requisition\Application;
use Core\Src\Models\Requisition\ProviderRequisition;
use Core\Src\Models\Requisition\Tender;
use Core\Src\Models\Tag\Tag;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
	public $timestamps = true;
    protected $fillable = [
		"subject",
		"description",
		"status",
		"recruitment_date",
		"start_date",
		"end_date",
		"min_price",
		"max_price",
		"rate_type"
    ];
    protected $guarded = [
		"created_at",
		"created_by",
		"updated_at",
		"updated_by",
		"submitted_at",
		"company_id",
		"branch_id"
    ];
    protected $dates = [
		"created_at",
		"updated_at",
		"submitted_at",
		"recruitment_date",
		"start_date",
		"end_date"
    ];
    protected $rules = [
		"branch_id" => "required|integer",
		"company_id" => "required|integer",
		"subject" => "max:255",
		"description" => "max:2000",
		"status" => "integer",
		"recruitment_date" => "date",
		"start_date" => "date",
		"end_date" => "date",
		"min_price" => "numeric",
		"max_price" => "numeric",
		"rate_type" => "integer",
		"submitted_at" => "date"
    ];

    public function company()
    {
		return $this->belongsTo(Company::class, "company_id");
    }

    public function branch()
    {
		return $this->belongsTo(Branch::class, "branch_id");
    }

    public function tags()
    {
		return $this->morphToMany(Tag::class, "taggable");
    }

    public function providerRequisitions()
    {
		return $this->hasMany(ProviderRequisition::class);
    }

    public function applications()
    {
		return $this->hasMany(Application::class);
    }

    public function tenders()
    {
		return $this->hasMany(Tender::class);
    }
}
