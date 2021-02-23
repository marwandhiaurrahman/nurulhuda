<?php

namespace App\Http\Controllers\Admin;

use App\Arsip;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ArsipController extends Controller
{
    public function index(Request $request)
    {
        $arsips = Arsip::orderBy('id', 'DESC')->paginate(5);
        return view('admin.arsip.index', compact('arsips'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arsip = Arsip::pluck('name', 'name')->all();
        return view('admin.arsip.create', compact('arsip'));
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
            'jenis' => 'required',
            'keterangan' => 'required',
        ]);

        $user = Auth::user()->id;
        $arsip = new Arsip($request->all());
        $arsip->user_id = $user;

        if ($request->file) {
            $fileName = $request->file->getClientOriginalName();
            $request->file->move(public_path('uploads'), $fileName);
            $arsip->file_path = $fileName;
        }

        $arsip->save();

        return redirect()->route('arsip.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function show(Arsip $arsip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function edit(Arsip $arsip)
    {
        return view('admin.arsip.edit', compact('arsip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arsip $arsip)
    {
        $this->validate($request, [
            'name' => 'required',
            'jenis' => 'required',
            'keterangan' => 'required',
        ]);

        if ($request->file) {
            if (File::exists(public_path('uploads/' . $arsip->file_path))) {
                File::delete(public_path('uploads/' . $arsip->file_path));
            }
            $fileName = $request->file->getClientOriginalName();
            $request->file->move(public_path('uploads'), $fileName);
            $arsip->file_path = $fileName;
        }

        $arsip->update($request->all());

        return redirect()->route('arsip.index')
            ->with('success', 'Tahun Ajaran updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arsip $arsip)
    {
        if (File::exists(public_path('uploads/' . $arsip->file_path))) {
            File::delete(public_path('uploads/' . $arsip->file_path));
        } else {
            dd('File dodes not exists.');
        }
        $arsip->delete();
        return redirect()->route('arsip.index')
            ->with('success', 'User deleted successfully');
    }
}
