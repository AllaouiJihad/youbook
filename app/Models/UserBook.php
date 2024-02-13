<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBook extends Model
{
    use HasFactory;
    protected $table = 'book_user';
    public $timestamps = false;
    protected $fillable = ['id','id_user', 'id_book','date_reservation'];

   
}
