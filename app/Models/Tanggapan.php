<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $table = 'tanggapan';
    protected $with = ['pengaduan'];


    protected $fillable = [
        'id_pengaduan',
        'tgl_tanggapan',
        'tanggapan',
        'status',
        'username'
    ];


    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class, 'id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('user_id', 'id');
    }
}
