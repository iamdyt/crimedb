<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Victim extends Model
{
    use HasFactory;

    public function incidents(){
        return $this->hasMany(CaseFile::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }
}
