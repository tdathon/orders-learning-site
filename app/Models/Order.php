<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'item', 'date', 'subtotal'];
    
    public function scopeFilter($query, array $filters) {
        if($filters['name'] ?? false){
            $query->where('name','like','%'.request('name').'%');
        }
    }
}
