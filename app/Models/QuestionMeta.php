<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionMeta extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'key',
        'value',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
