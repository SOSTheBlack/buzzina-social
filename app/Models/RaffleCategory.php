<?php

namespace App\Models;

use App\Models\Enums\RaffleCategoryStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaffleCategory extends Model
{
    /** @use HasFactory<\Database\Factories\RaffleCategoryFactory> */
    use HasFactory;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'name',
        'slug',
        'status',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'status' => RaffleCategoryStatusEnum::class,
    ];

    /**
     * {@inheritdoc}
     */
    protected $attributes = [
        'status' => RaffleCategoryStatusEnum::Active,
    ];
}
