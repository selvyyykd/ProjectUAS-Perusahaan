<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//test
class About extends Model
{
    use HasFactory;

    protected $table = 'about';
    protected $fillable = [
        'judul', 
        'subjudul',
        'deskripsi_1',
        'deskripsi_2',
        'kelebihan_1',
        'kelebihan_2',
        'kelebihan_3',
        'kelebihan_4',
    ];
    
}
