<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;
    protected $fillable = ['id_spp','tahun','nominal'];


    public static function generateIdSpp()
    {
        return now()->format('Ymd').rand(1000, 9999);
    }

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
}
