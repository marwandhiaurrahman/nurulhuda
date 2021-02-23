<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'jenjang', 'alamat', 'asalsekolah','status',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
