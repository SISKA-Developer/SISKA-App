<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class linktujuancapaian extends Model
{
    use HasFactory;
    protected $table = "linktujuancapaian";
 
    protected $fillable = ['link','keterangan','program_studi'];
}
