<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'message',
        'rating'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }

    public function index(){
        $product_comments = DB::table('product_comments')
            ->get();
        return $product_comments;
    }

    public function store() {
        
    }

    public function edit(){
        DB::table('product_comments')
        ->where('id', $this->id)
        ->update([
            'name' => $this->name,
        ]);
    }

    public function delete(){ 
        DB::table('product_comments')
            ->where('id', $this->id)
            ->delete();
    }
}