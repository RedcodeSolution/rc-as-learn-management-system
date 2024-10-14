<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class html extends Model
{
    /** @use HasFactory<\Database\Factories\HtmlFactory> */
    use HasFactory;
    protected $fillable = ['answer'];
}
