<?php

namespace App\Models;

use Database\Factories\RaffleFactory;
use App\Models\Enums\RaffleStatusEnum;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enums\RaffleTicketTypeEnum;
use Illuminate\Database\Eloquent\SoftDeletes;
use SOSTheBlack\Repository\Contracts\Transformable;
use SOSTheBlack\Repository\Traits\TransformableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Raffle.
 *
 * @package namespace App\Models;
 */
class Raffle extends Model implements Transformable
{
    /** @use HasFactory<RaffleFactory> */
    use HasFactory;
    use TransformableTrait;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'raffle_category_id', 'status', 'title', 'ticket_quantity', 'ticket_price', 'ticket_type', 'phone',
    ];

    /**
     * @inheritdoc
     */
    protected $casts = [
        'status' => RaffleStatusEnum::class, 'ticket_type' => RaffleTicketTypeEnum::class,
    ];

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @return BelongsTo
     */
    public function raffle_category(): BelongsTo
    {
        return $this->belongsTo(RaffleCategory::class);
    }

}
