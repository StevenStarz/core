<?php

namespace Core\Src\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public $timestamps = true;
    protected $fillable = [
		"name",
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
		"code" => "required",
		"name" => "required",
		"company_id" => "required|integer"
    ];

    public function company()
    {
    	return $this->belongsTo(Company::class, )
    }
}
