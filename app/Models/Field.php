<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Field extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'label',
        'element',
        'identifier',
        'type',
        'placeholder'
    ];

    /**
     * @return HasMany
     */
    public function fieldValues(): HasMany
    {
        return $this->hasMany(FieldValue::class);
    }
}
