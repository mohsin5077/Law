<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cpri extends Model
{
    protected $fillable = [
        'product_id',
        'status',
        'tested_by',
        'results',
        'remarks',
        'tested_at',
    ];

    public function users(){
        return $this->hasMany(user::class);
    }
}
