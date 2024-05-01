<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    protected $fillable = [
        'form_id',
        'started_at',
        'ended_at',
        'satisfaction_ratio',
    ];

    public function answers()
    {
        return $this->hasMany(QuestionAnswer::class);
    }

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function metas()
    {
        return $this->hasMany(FormMeta::class);
    }

    public function completedTime(): Attribute
    {
        return Attribute::make(
            get: function ($value, array $attributes) {
                if (!$attributes['completed_at']) {
                    return null;
                }

                return Carbon::parse($attributes['completed_at'])->diff($attributes['started_at'])->format('%i:%S');
            }
        );
    }
}
