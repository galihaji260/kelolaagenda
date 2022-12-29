<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'divisi_id','no_hp', 'tipe'];

    public function pengisiYasinan()
    {
        return $this->belongsTo('PengisiYasinan', 'personaldata_id', 'id');
    }

    public function detailinfo(){
        return $this->belongsTo(User::class);
    }
}
