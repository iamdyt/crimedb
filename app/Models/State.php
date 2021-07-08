<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public static function getAllStates(){
        return self::all();
    }
    
    public function cases(){
        return $this->hasMany(CaseFile::class);
    }

    public function officers(){
        return $this->hasMany(Officer::class);
    }

    public function complainants(){
        return $this->hasMany(Complainant::class);
    }

    public function victims(){
        return $this->hasMany(Victims::class);
    }

    public function accuseds(){
        return $this->hasMany(Accused::class);
    }

    public function stations(){
        return $this->hasMany(Station::class);
    }
}
