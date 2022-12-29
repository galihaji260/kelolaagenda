<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notulas extends Model
{
    use HasFactory;
    protected $fillable = ['personaldata_id','tanggal', 'judul', 'peserta', 'konten'];

    public function pencatat(){
        return $this->belongsTo(PersonalData::class, 'personaldata_id');
    }
}
