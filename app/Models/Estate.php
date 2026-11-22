<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estate extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'company_id',
        'code',
        'name',
        'location',
        'boundary',
        'total_area_ha',
        'planted_area_ha',
        'hgu_number',
        'hgu_expiry',
        'manager_id',
        'is_active',
    ];

    protected $casts = [
        'location' => 'array',
        'boundary' => 'array',
        'total_area_ha' => 'decimal:2',
        'planted_area_ha' => 'decimal:2',
        'hgu_expiry' => 'date',
        'is_active' => 'boolean',
    ];

    protected $dates = [
        'deleted_at',
    ];

    // Relationships
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function manager(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'manager_id');
    }

    public function afdelings(): HasMany
    {
        return $this->hasMany(Afdeling::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    public function warehouses(): HasMany
    {
        return $this->hasMany(Warehouse::class);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCompany($query, $companyId)
    {
        return $query->where('company_id', $companyId);
    }
}