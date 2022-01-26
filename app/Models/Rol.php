<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Rol extends Model
{
    public function usuario(){
        return $this->hasMany(User::class);
    }
    use HasFactory;
    use SoftDeletes;
}
