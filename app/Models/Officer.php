<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    use HasFactory;

    public $guarded = [];

    public function cases(){
        return $this->hasMany(CaseFile::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function rank(){
        return $this->belongsTo(Rank::class);
    }

    public function station(){
        return $this->belongsTo(Station::class);
    }

    public function state(){
        return $this->belongsTo(State::class, 'state_of_origin_id');
    }
}
