<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CssProgress extends Model
{
    /** @use HasFactory<\Database\Factories\CssProgressFactory> */
    use HasFactory;
    protected $fillable = ['user_id','question','user_answer','correct_answer','is_correct','correct_count','wrong_count'];
    public function CssController()
    {
        return $this->belongsTo(CssForm::class);
    }
}
