<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{

    use HasFactory;
    protected $fillable = [
        'product_id',
        'product_name',
        'mfg_date',
        'image',
        'category_id',
        'status',
    ];


    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function cpri()
    {
        return $this->belongsTo(cpri::class);
    }
    public function tester()
    {
        return $this->hasMany(tester::class, 'product_id');
    }
}
