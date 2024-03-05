<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductOrdered extends Model
{
    use HasFactory, HasUuids;

    public function productOrdered(): HasMany {
        return $this->hasMany(ProductOrderedHasOrder::class, 'product_ordered_id');
    }
}
