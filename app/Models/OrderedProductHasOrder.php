<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderedProductHasOrder extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'ordered_product_id',
        'order_id',
        'quantity',
    ];

    public function orderedProduct(): BelongsTo {
        return $this->belongsTo(OrderedProduct::class, 'id');
    }

    public function order(): BelongsTo {
        return $this->belongsTo(Order::class, 'id');
    }

    public $timestamps = false;
}
