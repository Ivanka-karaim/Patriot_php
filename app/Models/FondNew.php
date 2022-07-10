<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FondNew extends Model
{
    use HasFactory;
    public function photos(){
        return $this->hasMany(FondNewPhoto::class);
    }
}
