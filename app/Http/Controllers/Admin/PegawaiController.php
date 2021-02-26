<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pegawai;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Hash;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::whereHas('roles', function ($q) {
            $q->where('is_admin', 1);
        })->orderBy('id', 'DESC')->paginate(5);
        return view('admin.pegawai.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('admin.pegawai.create', compact('roles'));
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
            'username' => 'required',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        // dd($input);
        $input['password'] = Hash::make($input['password']);

        $pegawai = new Pegawai;
        $pegawai->ktp = $request->ktp;
        $pegawai->alamat = $request->alamat;

        $user = User::create($input);
        $user->assignRole($request->input('roles'))->pegawai()->save($pegawai);

        return redirect()->route('pegawai.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('admin.pegawai.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $user = User::find($id);
        $user->update($input);
        $user->pegawai->update([
            'alamat' => $request->alamat,
            'ktp' => $request->ktp,
        ]);

        return redirect()->route('pegawai.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('pegawai.index')
            ->with('success', 'User deleted successfully');
    }
}
