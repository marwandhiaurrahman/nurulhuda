<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\JadwalPenerimaan;
use App\TahunAjaran;
use Illuminate\Http\Request;

class JadwalPenerimaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jadwalpenerimaans = JadwalPenerimaan::orderBy('id', 'DESC')->paginate(5);
        return view('admin.jadwalpenerimaan.index', compact('jadwalpenerimaans'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tahunajarans = TahunAjaran::get();
        return view('admin.jadwalpenerimaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'tahun_ajaran_id' => 'required',
            'tgl_awal' => 'required',
            'tgl_akhir' => 'required',
        ]);

        $input = $request->all();
        JadwalPenerimaan::create($input);
        return redirect()->route('jadwal-penerimaan.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JadwalPenerimaan  $jadwalPenerimaan
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalPenerimaan $jadwalPenerimaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JadwalPenerimaan  $jadwalPenerimaan
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalPenerimaan $jadwalPenerimaan)
    {
        return view('admin.jadwalpenerimaan.edit', compact('jadwalPenerimaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JadwalPenerimaan  $jadwalPenerimaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalPenerimaan $jadwalPenerimaan)
    {
        $this->validate($request, [
            'name' => 'required',
            'tgl_awal' => 'required',
            'tgl_akhir' => 'required',
        ]);

        $jadwalPenerimaan->update($request->all());
        return redirect()->route('jadwal-penerimaan.index')
            ->with('success', 'Tahun Ajaran updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JadwalPenerimaan  $jadwalPenerimaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalPenerimaan $jadwalPenerimaan)
    {
        $jadwalPenerimaan->delete();

        return redirect()->route('jadwal-penerimaan.index')
                        ->with('success','Tahun Ajaran deleted successfully');
    }
}
