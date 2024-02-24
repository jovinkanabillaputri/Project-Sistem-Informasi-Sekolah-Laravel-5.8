<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = "kelas";
    protected $fillable = ['nama_kelas', 'jurusan_id', 'guru_id'];

    protected $primarykey = "id";

    public function mapel()
    {
        return$this->hasMany('App\mapel');
    }

    public function guru()
    {
        return$this->belongsTo('App\guru');
    }

    public function siswa()
    {
        return$this->hasMany('App\siswa');
    }

    public function jurusan()
    {
        return$this->belongsTo('App\jurusan');
    }
}
