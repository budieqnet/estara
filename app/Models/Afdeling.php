<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Afdeling extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'estate_id',
        'code',
        'name',
        'boundary',
        'total_area_ha',
        'planted_area_ha',
        'is_active',
    ];

    protected $casts = [
        'boundary' => 'array',
        'total_area_ha' => 'decimal:2',
        'planted_area_ha' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    protected $dates = [
        'deleted_at',
    ];

    // Relationships
    public function estate(): BelongsTo
    {
        return $this->belongsTo(Estate::class);
    }

    public function blocks(): HasMany
    {
        return $this->hasMany(Block::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByEstate($query, $estateId)
    {
        return $query->where('estate_id', $estateId);
    }
}