<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
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
        DB::table('product_comments')
        ->insert([
            'name' => $this->name,
        ]);
    }

    public function edit(){
        DB::table('product_comments')
        ->where('id', $this->id)
        ->update([
            'name' => $this->name,
        ]);
    }

    public function delete(){
        DB::table('product-comments')
            ->where('id', $this->id)
            ->delete();
    }
}
