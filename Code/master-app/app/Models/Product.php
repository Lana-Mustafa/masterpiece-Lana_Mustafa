<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class ,'subcategory_id');
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class ,'supplier_id');
    }
    public function gift()
    {
        return $this->belongsTo(Gift::class ,'gift_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class,'product_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class,'product_id');
    }
    
    protected $attributes = [
        'status' => false,
    ];

}
