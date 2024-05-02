<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_in extends Model
{
    protected $fillable=['name','email','password','confirm'];
    use HasFactory;
}
