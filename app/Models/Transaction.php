<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = "transactions";
    protected $fillable = [
        'user_id',
        'arrived',
        'status',
    ];

    protected $with = [
        'user',
        'order',
        'STATUS'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', "id");
    }

    public function order(){
        return $this->hasMany(Order::class, 'transaction_id', 'id');
    }

    public function STATUS(){
        return $this->hasMany(STATUS::class, 'status', 'id');
    }
}
