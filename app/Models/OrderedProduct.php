<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderedProduct extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'price',
        'vat_id',
    ];

    public function orderedProduct(): HasMany {
        return $this->hasMany(OrderedProductHasOrder::class, 'ordered_product_id');
    }
}
