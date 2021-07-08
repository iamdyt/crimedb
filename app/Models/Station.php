<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    public $guarded = [];

    public function officers(){
        return $this->hasMany(Officer::class);
    }
    public function state(){
        return $this->belongsTo(State::class);
    }

    public function departments(){
        return $this->belongsToMany(Department::class);
    }

    public function getReference(){
        return 'NPF'.mt_rand(4000,90000);
    }

}
