<?php

namespace App\Models;

use GuzzleHttp\Psr7\Query;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeByCode($query, string $code) : Category 
    {
        return $query->where('code', $code);
    }
}
