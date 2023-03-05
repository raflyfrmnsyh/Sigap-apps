<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;



    protected $with = ['masyarakat'];
    protected $table = 'pengaduan';


    protected $fillable = [
        'judul_laporan',
        'isi_laporan',
        'nik',
        'masyarakat_id',
        'tgl_pengaduan',
        'lokasi',
        'foto',
        'status'
    ];



    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class, 'masyarakat_id');
    }

    public function tanggapan()
    {
        return $this->hasOne(Tanggapan::class, 'id');
    }
}
