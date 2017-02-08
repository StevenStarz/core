<?php

namespace Core\Src\Models\Requisition;

use Core\Src\Models\Department\Member;
use Core\Src\Models\Requisition\Application;
use Core\Src\Models\Requisition\Tender;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
	public $timestamps = true;
    protected $fillable = [
        "status",
        "action_date"
    ];
    protected $guarded = [
        "created_at",
        "updated_at",
        "tender_id",
        "member_id"
    ];
    protected $dates = [
        "created_at",
        "updated_at",
        "action_date"
    ];
    protected $rules = [
        "status" => "integer",
        "tender_id" => "required|integer",
        "member_id" => "required|integer",
        "action_date" => "date"
    ];

    public function member()
    {
		return $this->belongsTo(Member::class, "member_id");
    }

    public function tender()
    {
		return $this->belongsTo(Tender::class, "tender_id");
    }

    public function applications()
    {
		return $this->hasMany(Application::class);
    }
}
