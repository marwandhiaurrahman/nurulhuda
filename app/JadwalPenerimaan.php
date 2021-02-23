<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPenerimaan extends Model
{
    protected $fillable = [
        'name', 'tgl_awal', 'tgl_akhir', 'tahun_ajaran_id', 'tgl_pembayaran','tgl_tes','tgl_pengumuman'
    ];

    /**
     * The roles that belong to the JadwalPenerimaan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tahunajaran()
    {
        return $this->hasMany(TahunAjaran::class);
    }
}
