<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tester extends Model
{
    use HasFactory;
    protected $fillable = [
        'test_id',
        'product_id',
        'test_type',
        'tested_by',
        'results',
        'remarks',
        'tested_at',
    ];

    public function users(){
        return $this->belongsTo(user::class, 'tested_by');
    }
    public function products(){
        return $this->belongsTo(products::class, 'product_id');
    }
}
