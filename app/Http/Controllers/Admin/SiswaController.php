<?php

namespace App\Http\Controllers\Admin;

use App\Siswa;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:siswa-list|siswa-create|siswa-edit|siswa-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:siswa-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:siswa-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:siswa-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function index(Request $request)
    {
        $data = User::whereHas('roles', function ($q) {
            $q->where('name', 'Siswa');
        })->orderBy('id', 'DESC')->paginate(5);
        return view('admin.siswa.index', compact('data'))
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
        return view('admin.siswa.create', compact('roles'));
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
            'username' => 'required|unique:users',
            'telp' => 'required',
            'email' => 'required|email|',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',
            'asalsekolah' => 'required',
            'alamat' => 'required',
            'status' => 'required',
            'jenjang' => 'required',


        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $siswa = new Siswa;
        $siswa->asalsekolah = $request->asalsekolah;
        $siswa->alamat = $request->alamat;
        $siswa->status = $request->status;
        $siswa->jenjang = $request->jenjang;

        $user = User::create($input);
        $user->assignRole($request->input('roles'))->siswa()->save($siswa);

        return redirect()->route('siswa.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.siswa.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('admin.siswa.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles' => 'required',
            'status' => 'required',
            'jenjang' => 'required',


        ]);

        $input = $request->all();

        $user = User::find($id);
        $user->update($input);
        $user->siswa->update([
            'foto'=> $request->foto,
            'asalsekolah' => $request->asalsekolah,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'jenjang' => $request->jenjang,

        ]);

        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));

        return redirect()->route('siswa.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('siswa.index')
                        ->with('success','User deleted successfully');
    }
}
