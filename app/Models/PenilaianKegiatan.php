<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianKegiatan extends Model
{
    use HasFactory;
    
    protected $fillable = ['nilai', 'gambar', 'catatan_pelaksanaan', 'agenda_id', 'penilai_id'];

    public function penilain(){
        return $this->belongsTo(Agenda::class, 'agenda_id');
    }
}
