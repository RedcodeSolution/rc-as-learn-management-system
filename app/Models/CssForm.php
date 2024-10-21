<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CssForm extends Model
{
    /** @use HasFactory<\Database\Factories\CssFormFactory> */
    use HasFactory;
    protected $fillable = ['answer'];
}
