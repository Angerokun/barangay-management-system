<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationFormSection extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'application_form_id',
        'section_name',
        'is_active'
    ];

    /**
     * @return BelongsTo
     */
    public function applicationForm(): BelongsTo
    {
        return $this->belongsTo(ApplicationFormSection::class);
    }

    /**
     * @return HasMany
     */
    public function applicationFormFields(): HasMany
    {
        return $this->hasMany(ApplicationFormField::class);
    }
}
