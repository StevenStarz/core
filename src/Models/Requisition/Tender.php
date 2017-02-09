<?php

namespace Models\Requisition;

use Models\Department\Provider;
use Models\Requisition\Applicant;
use Models\Requisition\Requisition;
use Models\Tag\Tag;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
	public $timestamps = true;
    protected $fillable = [
        "source",
        "subject",
        "description",
        "status",
        "start_date",
        "end_date",
        "rate_type",
        "markup_price",
        "markup_rate_type",
        "submitted_at",
    ];
    protected $guarded = [
		"created_at",
		"created_by",
		"updated_at",
		"updated_by",
		"submitted_at",
		"provider_id",
		"requisition_id"
    ];
	protected $dates = [
		"created_at",
		"updated_at",
		"submitted_at",
		"start_date",
		"end_date"
	];
    protected $rules = [
		"provider_id" => "required|integer",
		"requisition_id" => "required|integer",
		"subject" => "max:255",
		"description" => "max:2000",
		"status" => "integer",
		"start_date" => "date",
		"end_date" => "date",
		"rate_type" => "integer",
		"markup_price" => "numeric",
		"markup_rate_type" => "numeric",
		"submitted_at" => "date"
    ];

	public function tags()
	{
		return $this->morphToMany(Tag::class, "taggable");
	}

	public function provider()
	{
		return $this->belongsTo(Provider::class, "provider_id");
	}

	public function applicants()
	{
		return $this->hasMany(Applicant::class);
	}

	public function requisition()
	{
		return $this->belongsTo(Requisition::class, "requisition_id");
	}
}
