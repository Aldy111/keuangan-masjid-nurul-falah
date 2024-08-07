<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Officer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date_of_birth',
        'place_of_birth',
        'address',
        'gender',
        'status',
        'no_hp',
        'image',
        'position_id'
    ];

    public function Position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }
}
