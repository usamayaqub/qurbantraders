<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Product extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->name);

            $count = 2;
            while (static::where('slug', $product->slug)->exists()) {
                $product->slug = Str::slug($product->name) . '-' . $count;
                $count++;
            }
        });

        static::saving(function ($product) {
            // Generate or update slug based on the name
            $slug = Str::slug($product->name);

            // Check for uniqueness and append a number if needed
            $count = 2;
            while (static::where('slug', $slug)->where('id', '!=', $product->id ?? 0)->exists()) {
                $slug = Str::slug($product->name) . '-' . $count;
                $count++;
            }
            $product->slug = $slug;
        });

        static::updating(function ($product) {
            // Generate or update slug based on the name
            $slug = Str::slug($product->name);

            // Check for uniqueness and append a number if needed
            $count = 2;
            while (static::where('slug', $slug)->where('id', '!=', $product->id ?? 0)->exists()) {
                $slug = Str::slug($product->name) . '-' . $count;
                $count++;
            }
            $product->slug = $slug;
        });
    }

    protected $fillable = [
        'cat_id',
        'name',
        'price',
        'discounted_price',
        'short_description',
        'description',
        'slug',
        'status',
    ];

    public function category()
    {
        return $this->hasOne(Category::class,'id','cat_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
}
