<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama','nisn','nis','id_kelas','alamat','no_telp','id_spp'];

    public function kelas(){
        return $this->hasOne(Kelas::class,'id_kelas','id_kelas');
    }
    public function spp(){
        return $this->hasOne(Spp::class,'id_spp','id_spp');
    }
}
