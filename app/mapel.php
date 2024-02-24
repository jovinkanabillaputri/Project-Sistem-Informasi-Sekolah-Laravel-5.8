<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    protected $table = "mapel";
    protected $fillable = ['nama_mapel', 'hari', 'jam_mulai', 'jam_selesai', 'kelas_id', 'jurusan_id'];

    protected $primarykey = "id";

    // public function guru()
    // {
    //     return$this->hasMany('App\guru');
    // }


    public function kelas()
    {
        return$this->belongsTo('App\kelas');
    }

    public function jurusan()
    {
        return$this->belongsTo('App\jurusan');
    }
}
