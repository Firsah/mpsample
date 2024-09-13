<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'category_id',
        'product_name',
        'description',
        'price',
        'stok',
        'weight'
    ];

    public function category(){
        return $this->belongsTo(category::class);
    }
    
    public function imageProduct(){
        return $this->hasMany(imageProduct::class);
    }
    
}
