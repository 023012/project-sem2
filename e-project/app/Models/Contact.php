<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'admins';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'content'
    ];

    public function index()
    {
        $contacts = DB::table('contacts')
            ->get();
        return $contacts;
    }



    public function store()
    {
        DB::table('contacts')
            ->insert([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'content' => $this->content,
            ]);
    }

    public function edit()
    {
        DB::table('contacts')
            ->where('id', $this->id)
            ->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'content' => $this->content,
            ]);
    }

    public function delete()
    {
        DB::table('contacts')
            ->where('id', $this->id)
            ->delete();
    }
}
