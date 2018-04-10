<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemiliklahan extends Model
{
    //
    protected $table = 'pemiliklahans';

    protected $casts = [
        'tanggal_lahir' => 'date:Y-m-d',
    ];
    protected $fillable =[
        'nama_depan',
        'nama_belakang',
        'email',
        'ktp',
        'no_telp',
        'username',
        'password',
    ];
    protected $hidden =[

    ];


    
}
