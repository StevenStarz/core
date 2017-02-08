<?php

namespace Core\Src\Models\Requisition;

use Core\Src\Models\Requisition\Requisition;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public $timestamps = true;
    protected $fillable = [
        "status",
        "action_date"
    ];
    protected $guarded = [
        "created_at",
        "updated_at",
        "requisition_id",
        "applicant_id"
    ];
    protected $dates = [
        "created_at",
        "updated_at",
        "action_date"
    ];
    protected $rules = [
        "status" => "integer",
        "requisition_id" => "required|integer",
        "applicant_id" => "required|integer",
        "action_date" => "date"
    ];

    public function requisition()
    {
		return $this->belongsTo(Requisition::class, "requisition_id");
    }

    public function applicant()
    {
		return $this->belongsTo(Applicant::class, "applicant_id");
    }
}
