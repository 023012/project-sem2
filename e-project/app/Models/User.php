<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     
    protected $table = 'users';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'password',
        'role'
    ];

    public function index(){
        $users = DB::table('users')
            ->get();
        return $users;
    }

    public function store(){
        DB::table('users')
            ->insert([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'password' => $this->password
            ]);
    }

    public function edit(){
        DB::table('users')
        ->where('id', $this->id)
        ->update([
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'password' => $this->password,
            'phone' => $this->phone,
        ]);
    }

    public function delete(){
        DB::table('users')
        ->where('id', $this->id)
        ->delete();
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
