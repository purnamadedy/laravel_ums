<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_ums extends Model
{
    protected $guarded = [];

    public function employee(){
        return $this->belongsTo(employee::class, 'employee_id','id');
    }
}
