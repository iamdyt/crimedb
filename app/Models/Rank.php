<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;

    public $guarded = [];
    public $timestamps = false;

    public function officers(){
        return $this->hasMany(Officer::class);
    }
}
