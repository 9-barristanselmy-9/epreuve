<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epreuve extends Model
{
    use HasFactory;

    protected $fillable = ["numero","date","lieu"];
    
}
