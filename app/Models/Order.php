<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'item',
        'location',
        'size',
        'weight',
        'pickup_at',
        'delivery_at',
    ];

    const PENDING = 'pending';
    const IN_PROGRESS = 'in-progress';
    const DELIVERED = 'delivered';
    const CANCELLED = 'cancelled';


    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope a query to filter by customer.
     */
    public function scopeWhereCustomer(Builder $query, int $customerId): void
    {
        $query->where('customer_id', $customerId);
    }

    /**
     * Scope a query to filter by status.
     */
    public function scopeWhereStatus(Builder $query, string $status): void
    {
        $query->where('status', $status);
    }
}
