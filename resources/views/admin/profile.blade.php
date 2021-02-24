@extends('layouts.master')

@section('title', 'Pengaturan profile')

@section('content')
<div ui-view class="app-body" id="view">
    <div class="padding">
        <div class="row m-b">
            <div class="col-sm-12 col-md-12">
                <div class="box">
                    <div class="box-header primary">
                        <h3>Pengaturan Profile</h3>
                        <small style="color: #000">Update Informasi Login PPDB Yayasan Nurul Huda Kertawangunan</small>
                        <div class="box-tool">
                            <ul class="nav">
                                <li class="nav-item inline">
                                    <a class="nav-link">
                                        <i class="material-icons md-18">&#xe863;</i>
                                    </a>
                                </li>
                                <li class="nav-item inline dropdown">
                                    <a class="nav-link" data-toggle="dropdown">
                                        <i class="material-icons md-18">&#xe5d4;</i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                                        <a class="dropdown-item" href>Action</a>
                                        <a class="dropdown-item" href>Another action</a>
                                        <a class="dropdown-item" href>Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item">Separated link</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-body">
                        {!! Form::model(Auth::user(), ['method' => 'PATCH','route' => ['profileupdate',
                        Auth::user()->id]]) !!}

                        {{-- <form ui-jp="parsley" action="{{ route('user.store') }}" method="POST"> --}}
                        @csrf
                        <div class="box-body">
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label text-bold">Foto</label>
                                <div class="col-sm-6">
                                  
                                  <label for="profile_image"></label>
                                  <img id="preview_img" src="{{ asset('assets/images/profile.png') }}" class="mb-3" width="150" height="150"/>
                                  <input type="file" name="profile_image" id="profile_image" onchange="loadPreview(this);" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label text-bold">Nama Lengkap</label>
                                <div class="col-sm-6">
                                    {!! Form::text('name', Auth::user()->name, array('placeholder' => 'Masukan Nama
                                    Lengkap','class' => 'form-control','required' => '')) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label text-bold">Username</label>
                                <div class="col-sm-6">
                                    {!! Form::text('username', Auth::user()->username, array('placeholder' => 'Masukan
                                    Username','class' => 'form-control','required' => '')) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label text-bold">Telepon</label>
                                <div class="col-sm-6">
                                    {!! Form::text('telp', Auth::user()->telp, array('placeholder' => 'Masukan
                                    Username','class' => 'form-control','required' => '')) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label text-bold">Email</label>
                                <div class="col-sm-6">
                                    {!! Form::email('email', Auth::user()->email, array('placeholder' => 'Masukan
                                    Email','class' => 'form-control', 'minlength' => '6', 'required' => '',)) !!}
                                </div>
                            </div>
                        </div>
                        <div class="dker p-a text-left">
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn primary">Update Profile</button>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
