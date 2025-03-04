<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    use HasFactory;
    protected $table = 'shoes';
    protected $fillable = [
        'user_id',
        'material',
        'color',
        'model',
        'image',
    ];
    protected $with = [
        'user',
        'order'
    ];

    public function user(){
        return $this->belongsTo(User::class, "user_id", 'id');
    }

    public function order(){
        return $this->hasMany(Order::class, 'shoe_id', 'id');
    }
}
