<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory, HasUuids;

    public function vat(): HasOne {
        return $this->hasOne(Vat::class, 'id');
    }

    public function category(): HasOne {
        return $this->hasOne(Category::class, 'id');
    }
}
