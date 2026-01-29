<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EligibilityCriteria extends Model
{
    use HasFactory;

    protected $table = 'eligibility_criterias'; // Explicitly set table name if pluralization is tricky

    protected $fillable = [
        'subject_id',
        'min_attendance',
        'min_score',
        'no_debt',
        'description',
    ];

    protected $casts = [
        'min_attendance' => 'float',
        'min_score' => 'float',
        'no_debt' => 'boolean',
    ];

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
