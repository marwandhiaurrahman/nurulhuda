<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tahunajarans = TahunAjaran::orderBy('id', 'DESC')->paginate(5);
        return view('admin.tahunajaran.index', compact('tahunajarans'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.tahunajaran.create');
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
            'tgl_awal' => 'required',
            'tgl_akhir' => 'required',
        ]);

        $input = $request->all();
        TahunAjaran::create($input);
        return redirect()->route('tahun-ajaran.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TahunAjaran  $tahunAjaran
     * @return \Illuminate\Http\Response
     */
    public function show(TahunAjaran $tahunAjaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TahunAjaran  $tahunAjaran
     * @return \Illuminate\Http\Response
     */
    public function edit(TahunAjaran $tahunAjaran)
    {
        return view('admin.tahunajaran.edit', compact('tahunAjaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TahunAjaran  $tahunAjaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TahunAjaran $tahunAjaran)
    {
        $this->validate($request, [
            'name' => 'required',
            'tgl_awal' => 'required',
            'tgl_akhir' => 'required',
        ]);

        $tahunAjaran->update($request->all());
        return redirect()->route('tahun-ajaran.index')
            ->with('success', 'Tahun Ajaran updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TahunAjaran  $tahunAjaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(TahunAjaran $tahunAjaran)
    {
        $tahunAjaran->delete();

        return redirect()->route('tahun-ajaran.index')
                        ->with('success','Tahun Ajaran deleted successfully');
    }
}
