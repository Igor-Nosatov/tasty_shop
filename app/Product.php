<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'image','category_id','brand_id','category_id',
         'brand_id', 'capacity_id', 'power_output_id', 'cooking_type_id', 'color_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function capacity()
    {
        return $this->belongsTo(Capacity::class);
    }

    public function powerOutput()
    {
        return $this->belongsTo(PowerOutput::class);
    }

    public function cookingType()
    {
        return $this->belongsTo(CookingType::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
