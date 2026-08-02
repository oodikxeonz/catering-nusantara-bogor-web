<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'category_id', 'name', 'tier', 'price_per_pax',
        'min_order', 'description', 'image',
        'is_customizable', 'is_available',
    ];

    protected function casts(): array
    {
        return [
            'price_per_pax' => 'decimal:2',
            'is_customizable' => 'boolean',
            'is_available' => 'boolean',
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'package_items')
                    ->withPivot('quantity');
    }

    public function packageItems()
    {
        return $this->hasMany(PackageItem::class);
    }
}