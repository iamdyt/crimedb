<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accused extends Model
{
    use HasFactory;

    public $guarded = [];

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function cases(){
        return $this->hasMany(CaseFile::class);
    }

    public function station(){
        return $this->belongsTo(Station::class);
    }

}
