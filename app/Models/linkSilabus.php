<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class linkSilabus extends Model
{
    use HasFactory;
    protected $table = "link_silabuses";
 
    protected $fillable = ['link','kd_mk','keterangan'];
}
