<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory, HasUuids;


    public function vat(): BelongsTo
    {
        return $this->belongsTo(Vat::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);

    }
    public function  comment(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
