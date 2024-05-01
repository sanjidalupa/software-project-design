<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'required',
        'form_id',
        'user_id',
        'is_active',
        'type',
    ];

    public function metas()
    {
        return $this->hasMany(QuestionMeta::class);
    }
}
