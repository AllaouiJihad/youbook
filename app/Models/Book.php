<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =[
        'title',
        'author',
        'description',
        'status',
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
    
}
