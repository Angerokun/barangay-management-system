<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationForm extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'identifier',
        'application_nane'
    ];

    /**
     * @return HasMany
     */
    public function applicationFormSections(): HasMany
    {
        return $this->hasMany(ApplicationFormSection::class);
    }
}
