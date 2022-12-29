<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'tanggal', 'pic_id', 'pengisi_id', 'jenis_id', 'status_id', 'divisi_id', 'waktu_mulai', 'waktu_selesai','anggaran','realisasi_anggaran', 'tempat','deskripsi_kegiatan'];

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
        return $this->belongsTo(PersonalData::class, 'pic_id');
    }

    public function pengisiAgenda(){
        return $this->belongsTo(PersonalData::class,'pengisi_id');
    }

    
    public function statusAgenda(){
        return $this->belongsTo(StatusKegiatan::class,'status_id');
    }

    public function jenisAgenda(){
        return $this->belongsTo(jenisAgenda::class,'jenis_id');
    }

    public function namaDivisi(){
        return $this->belongsTo(Divisi::class,'divisi_id');
    }
    public function punyanilai(){
        return $this->hasmany(PenilaianKegiatan::class);
    }
    
    
}
