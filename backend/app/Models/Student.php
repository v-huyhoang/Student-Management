<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_code',
        'full_name',
        'date_of_birth',
        'gender',
        'phone',
        'email',
        'status',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function examRegistrations(): HasMany
    {
        return $this->hasMany(StudentExamRegistration::class);
    }

    public function chatSessions(): HasMany
    {
        return $this->hasMany(ChatSession::class);
    }
}
