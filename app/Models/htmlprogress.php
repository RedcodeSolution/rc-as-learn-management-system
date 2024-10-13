<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class htmlprogress extends Model
{
    /** @use HasFactory<\Database\Factories\HtmlprogressFactory> */
    use HasFactory;
    protected $fillable = ['user_id','question','user_answer','correct_answer','is_correct','correct_count','wrong_count'];
    public function htmlController()
    {
        return $this->belongsTo(html::class);
    }
}
