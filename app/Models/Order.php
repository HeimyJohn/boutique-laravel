<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'order_number',
        'order_date',
        'delivery_date',
        'user_id',
        'status',
        'total',
        'delivery_address_id',
        'billing_address_id',
    ];
    public function delivery(): HasOne {
        return $this->hasOne(Address::class, 'id');
    }

    public function billing(): HasOne {
        return $this->hasOne(Address::class, 'id');
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'id');
    }

    public function order(): HasMany {
        return $this->hasMany(OrderedProductHasOrder::class, 'order_id');
    }
}
