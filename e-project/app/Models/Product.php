<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'price',
        'thumbnail',
        'description',
        'material',
        'high',
        'width',
        'length',
        'category_id',
        'discount_id',
        'quantity',
        'status',
        'featured',
        'active',
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id')
            ->withDefault(['name' => '']);
    }

    public function discount()
    {
        return $this->hasOne(Discount::class, 'id', 'discount_id')
            ->withDefault(['name' => '']);
    }

    public function index(){
        $products = DB::table('products')
        ->get();
        return $products;
    }

    public function view(){
        DB::table('products')
        ->where('id', $this->id)->get();
    }

    public function store() {
        DB::table('products')
            ->insert([
                'name' => $this->name,
                'price' => $this->price,
                'thumbnail' => $this->thumbnail,
                'description' => $this->description,
                'material' => $this->material,
                'high' => $this->high,
                'width' => $this->width,
                'length' => $this->length,
                'category_id' => $this->category_id,
                'discount_id' => $this->discount_id,
                'quantity' => $this->quantity,
                'status' => $this->status,
                'featured' => $this->featured,
                'active' => $this->active,
            ]);
    }

    public function edit(){
        DB::table('products')
            ->where('id', $this->id)
            ->update([
                'name' => $this->name,
                'price' => $this->price,
                'thumbnail' => $this->thumbnail,
                'description' => $this->description,
                'material' => $this->material,
                'high' => $this->high,
                'width' => $this->width,
                'length' => $this->length,
                'category_id' => $this->category_id,
                'discount_id' => $this->discount_id,
                'quantity' => $this->quantity,
                'status' => $this->status,
                'featured' => $this->featured,
                'active' => $this->active,
            ]);
    }

    public function delete(){
        DB::table('products')
        ->where('id', $this->id)
        ->delete();
    }
}
