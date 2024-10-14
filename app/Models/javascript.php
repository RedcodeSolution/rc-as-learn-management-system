<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class javascript extends Model
{
    /** @use HasFactory<\Database\Factories\JavascriptFactory> */
    use HasFactory;
    protected $fillable = ['answer'];
}
