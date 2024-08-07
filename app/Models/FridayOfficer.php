<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FridayOfficer extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_fridayOfficer',
        'officer_id',
        'part_id',
    ];

    public function Officer(): BelongsTo
    {
        return $this->belongsTo(Officer::class);
    }

    public function Part(): BelongsTo
    {
        return $this->belongsTo(Part::class);
    }
}
