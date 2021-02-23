<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    protected $fillable = [
        'name', 'tgl_awal', 'tgl_akhir',
    ];

    /**
     * Get all of the s for the TahunAjaran
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jadwalpenerimaan()
    {
        return $this->belongsTo(JadwalPenerimaan::class);
    }

}
