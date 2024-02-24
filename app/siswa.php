<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class siswa extends Model
{
    protected $table = "siswa";
    protected $fillable = ['nis', 'nama', 'jenis_kelamin', 'email', 'alamat', 'kelas_id', 'jurusan_id','id_user'];

    protected $primarykey = "id"; 

    public function kelas()
    {
        return$this->belongsTo('App\kelas');
    }

    public function jurusan()
    {
        return$this->belongsTo('App\jurusan');
    }
}
