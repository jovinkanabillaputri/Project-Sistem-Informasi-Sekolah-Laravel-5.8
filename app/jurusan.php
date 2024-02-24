<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    protected $table = "jurusan";
    protected $fillable = ['nama_jurusan'];

    protected $primarykey = "id";

    public function mapel()
    {
        return$this->hasMany('App\mapel');
    }

    public function siswa()
    {
        return$this->hasMany('App\siswa');
    }

    public function kelas()
    {
        return$this->hasMany('App\kelas');
    }
}
