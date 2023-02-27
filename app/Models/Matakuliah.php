<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    use HasFactory;
/**
* fillable
*
* @var array
*/
protected $fillable = [
    'kode_kurikulum', 'kode_matkul', 'nama_matkul', 'jenis_matkul','sks',
];
}
