<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'image', 'is_available',
    ];

    protected function casts(): array
    {
        return ['is_available' => 'boolean'];
    }

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}