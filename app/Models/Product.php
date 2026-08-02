<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'type', 'image', 'is_addon', 'is_available',
    ];

    protected function casts(): array
    {
        return [
            'is_addon' => 'boolean',
            'is_available' => 'boolean',
        ];
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'package_items')
                    ->withPivot('quantity');
    }
}