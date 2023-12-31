<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Pembayaran;

class Spp extends Model
{
    use HasFactory;
    protected $table = 'spp';
    protected $guarded = ['id'];
    public $timestamps = false;
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_spp');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_spp');
    }
}
