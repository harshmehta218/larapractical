<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'answer',
        'is_correct'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'is_correct',
        'question_id'

    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
