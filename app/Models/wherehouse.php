<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wherehouse extends Model
{
    use HasFactory;
    
    protected $table = 'wherehouse';
    
    protected $fillable = [
        'wherehouse_code',
        'wherehouse_name',
        'province', 
        'city'
    ];
}
