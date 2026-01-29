<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentExamRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'exam_subject_id',
        'eligibility_status',
        'score',
        'result',
        'note',
    ];

    protected $casts = [
        'score' => 'float',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function examSubject(): BelongsTo
    {
        return $this->belongsTo(ExamSubject::class);
    }
}
