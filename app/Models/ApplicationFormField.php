<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicationFormField extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'application_form_section_id',
        'field_id',
        'is_active'
    ];

    /**
     * @return BelongsTo
     */
    public function applicationFormSection(): BelongsTo
    {
        return $this->belongsTo(ApplicationFormSection::class);
    }
}
