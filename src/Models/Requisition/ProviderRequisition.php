<?php

namespace Models\Requisition;

use Models\Department\Provider;
use Models\Requisition\Requisition;
use Illuminate\Database\Eloquent\Model;

class ProviderRequisition extends Model
{
	public $timestamps = true;
    protected $fillable = [
        "status",
        "action_date"
    ];
    protected $guarded = [
        "created_at",
        "updated_at",
        "created_by",
        "requisition_id",
        "provider_id"
    ];
    protected $dates = [
        "created_at",
        "updated_at",
        "action_date"
    ];
    protected $rules = [
        "status" => "integer",
        "requisition_id" => "required|integer",
        "provider_id" => "required|integer",
        "action_date" => "date"
    ];

    public function requisition()
    {
		return $this->belongsTo(Requisition::class, "requisition_id");
    }

    public function provider()
    {
		return $this->belongsTo(Provider::class, "provider_id");
    }
}
