<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_name',
        'semester',
        'year',
        'exam_type',
    ];

    public function examSubjects(): HasMany
    {
        return $this->hasMany(ExamSubject::class);
    }
}
