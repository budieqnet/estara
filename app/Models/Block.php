<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Block extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'afdeling_id',
        'code',
        'name',
        'variety_id',
        'planting_year',
        'planting_date',
        'spacing',
        'density_per_ha',
        'total_palms',
        'productive_palms',
        'area_ha',
        'boundary',
        'soil_type',
        'terrain_type',
        'status',
        'replanting_due_year',
    ];

    protected $casts = [
        'planting_date' => 'date',
        'area_ha' => 'decimal:2',
        'boundary' => 'array',
        'status' => 'string',
    ];

    protected $dates = [
        'deleted_at',
    ];

    // Relationships
    public function afdeling(): BelongsTo
    {
        return $this->belongsTo(Afdeling::class);
    }

    public function variety(): BelongsTo
    {
        return $this->belongsTo(PalmVariety::class, 'variety_id');
    }

    public function plantingCohorts(): HasMany
    {
        return $this->hasMany(PlantingCohort::class);
    }

    public function soilProfiles(): HasMany
    {
        return $this->hasMany(SoilProfile::class);
    }

    public function treePopulations(): HasMany
    {
        return $this->hasMany(TreePopulation::class);
    }

    public function harvestTickets(): HasMany
    {
        return $this->hasMany(HarvestTicket::class);
    }

    public function fertilizationPlans(): HasMany
    {
        return $this->hasMany(FertilizationPlan::class);
    }

    public function pestMonitorings(): HasMany
    {
        return $this->hasMany(PestMonitoring::class);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', '!=', 'cleared');
    }

    public function scopeByAfdeling($query, $afdelingId)
    {
        return $query->where('afdeling_id', $afdelingId);
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeMature($query)
    {
        return $query->whereIn('status', ['mature', 'prime']);
    }
}