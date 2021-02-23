<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    protected $fillable = [
        'name','jenis','file_path','keterangan','user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
