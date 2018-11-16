<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $fillable = [
        'jenis_id',
        'photo_id',
        'nama',
        'harga',
        'warna'
    ];

    public function Jenis(){
        return $this->belongsTo('App\jenis');
    }
    public function Photo(){
        return $this->belongsTo('App\Photo');
    }
}
