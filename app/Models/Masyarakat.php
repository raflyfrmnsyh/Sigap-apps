<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;

    protected $table = 'masyarakat';
    protected $with = ['user'];


    protected $fillable = [
        'user_id',
        'nik',
        'name',
        'telp'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
