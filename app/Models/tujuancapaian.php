<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tujuancapaian extends Model
{
    use HasFactory;

    protected $table = "tujuancapaian";
 
    protected $fillable = ['file','keterangan','program_studi'];
}