<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = ['id_kelas','kompetensi_keahlian'];
    
    public static function generateKelasId()
    {
        // Logika pembuatan ID, misalnya 'PRD-YYYYMMDD-XXXX'
        return now()->format('Ymd').rand(1000, 9999);
    }
    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
}
