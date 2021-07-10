<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseFile extends Model
{
    use HasFactory;
    public $guarded = [];

    public function complainant(){
        return $this->belongsTo(Complainant::class);
    }

    public function victim(){
        return $this->belongsTo(Victim::class);
    }

    public function accused(){
        return $this->belongsTo(Accused::class);
    }

    public function officer(){
        return $this->belongsTo(Officer::class, 'officer_in_charge');
    }

    public function state(){
        return $this->belongsTo(State::class);
    }
    public function station(){
        return $this->belongsTo(Station::class);
    }
}
