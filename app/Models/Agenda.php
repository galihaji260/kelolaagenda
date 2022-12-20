<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kegiatan', 'tanggal', 'penanggung_jawab', 'pengisi', 'jenis', 'status', 'divisi', 'waktu_mulai', 'waktu_selesai','anggaran','realisasi_anggaran', 'tempat','deskripsi_kegiatan', 'status'];

    public static function search($data)
    {
        $self = self::where(function ($query) use ($data) {
            foreach ($data as $key => $value) {
                $query->where($key, 'like', '%' . $value . '%');
            }
        })->get();

        return $self;
    }

  
    public function penanggungjawab()
    {
        return $this->belongsTo(PersonalData::class, 'penanggung_jawab');
    }

    public function pengisiAgenda(){
        return $this->belongsTo(PersonalData::class,'pengisi');
    }

    
    public function statusAgenda(){
        return $this->belongsTo(StatusKegiatan::class,'status');
    }

    public function jenisAgenda(){
        return $this->belongsTo(jenisAgenda::class,'jenis');
    }
    
    
}
