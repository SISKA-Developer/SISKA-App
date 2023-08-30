<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluasi extends Model
{
    use HasFactory;

    protected $table = "evaluasis";
 
    protected $fillable = 
    [
        'nama_tabel',
        'mk_id',
        'p1',
        'p2',
        'p3',
        'p4',
        'p5',
        'p6',
        'p7',
        'p8',
        'p9',
        'catatan',
    ];
}
