<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class divissi extends Model
{
    protected $guarded = [];

    public function employee(){
        return $this->hasMany(employee::class, 'employee_id','id');
    }
}
