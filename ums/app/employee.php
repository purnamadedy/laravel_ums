<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $guarded = [];

    public function ums(){
        return $this->hasMany(user_ums::class, 'user_ums_id','id');
    }

    public function divissi(){
        return $this->belongsTo(divissi::class, 'divisi_id','id');
    }
}
