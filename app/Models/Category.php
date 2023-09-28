<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'image',
        'slug',
        'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);

            $count = 2;
            while (static::where('slug', $category->slug)->exists()) {
                $category->slug = Str::slug($category->name) . '-' . $count;
                $count++;
            }
        });

        static::saving(function ($category) {
            // Generate or update slug based on the name
            $slug = Str::slug($category->name);

            // Check for uniqueness and append a number if needed
            $count = 2;
            while (static::where('slug', $slug)->where('id', '!=', $category->id ?? 0)->exists()) {
                $slug = Str::slug($category->name) . '-' . $count;
                $count++;
            }
            $category->slug = $slug;
        });

        static::updating(function ($category) {
            // Generate or update slug based on the name
            $slug = Str::slug($category->name);

            // Check for uniqueness and append a number if needed
            $count = 2;
            while (static::where('slug', $slug)->where('id', '!=', $category->id ?? 0)->exists()) {
                $slug = Str::slug($category->name) . '-' . $count;
                $count++;
            }
            $category->slug = $slug;
        });

    }

}
