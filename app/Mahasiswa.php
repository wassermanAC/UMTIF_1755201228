<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primarykey = 'nim';

    //field yang hanya boleh diisi
    protected $fillable = ['nim','nama_lengkap','prodi','alamat'];

    //field yang diabaikan isinya
    protected $guarded = [];

    public function mprodi()
    {
    	return $this->hasOne('App\Prodi','kode_prodi','prodi');
    }
}