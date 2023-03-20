<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class silabus extends Model
{
    use HasFactory;
    protected $table = "silabus";
 
    protected $fillable = ['file','keterangan'];
}
