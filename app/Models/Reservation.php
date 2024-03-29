<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id','id_user', 'id_book','date_reservation'];

    public function user()
    {
        return $this->belongsTo(User::class); 
    }

    public function book()
    {
        return $this->BelongsToMany(Book::class); 
    }
}
