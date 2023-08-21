<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected string $table = 'categories';

    protected $fillable = [
        'name'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_id', 'id');
    }
}
