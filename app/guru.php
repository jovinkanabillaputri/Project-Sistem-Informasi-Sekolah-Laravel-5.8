<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table = "guru";
    protected $fillable = ['nip', 'nama', 'jenis_kelamin', 'no_hp', 'alamat'];

    protected $primarykey = "id";

    public function mapel()
    {
        return$this->belongsTo('App\mapel');
    }

    public function kelas()
    {
        return$this->hasMany('App\kelas');
    }

    

}
