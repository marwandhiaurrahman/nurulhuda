<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'ktp', 'alamat',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
