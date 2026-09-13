<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'lawyer_name',
        'description',
        'photo'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
