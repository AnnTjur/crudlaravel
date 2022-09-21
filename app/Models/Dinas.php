<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinas extends Model
{
    use HasFactory;
    
    /**
     * fillable
     *
     * @var array
     */
    protected $table = 'dinas_luar';
     protected $fillable = [
        'nip',
        'nama',
        'kota_asal',
        'st_asal',
        'ket_asal',
        'kota_tujuan',
        'st_pulang',
        'ket_pulang',
    ];
}