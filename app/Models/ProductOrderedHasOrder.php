<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductOrderedHasOrder extends Model
{
    use HasFactory, HasUuids;

    public function productOrdered(): BelongsTo {
        return $this->belongsTo(ProductOrdered::class, 'id');
    }

    public function order(): BelongsTo {
        return $this->belongsTo(Order::class, 'id');
    }

    public $timestamps = false;
}
