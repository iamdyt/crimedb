<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complainant extends Model
{
    use HasFactory;

    public function reports(){
        return $this->hasMany(CaseFile::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }
}
