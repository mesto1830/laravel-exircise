<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['name','price'];

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPriceAttribute($value)
    {
        return $value. '$';
    }
}
