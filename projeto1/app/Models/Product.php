<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'stock',
        'name'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $with = ['categoria'];

    public function categoria()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
