@extends('layouts.master')

@section('content')

<div class="padding">
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <h2>Upload Arsip Data Baru</h2>
                    <small>Tambahkan identitas</small>
                </div>
                <div class="box-tool">
                    <ul class="nav">
                        <li class="nav-item inline">
                            <a class="btn btn-primary" href="{{ redirect()->back() }}"> Back</a>
                        </li>
                    </ul>
                </div>
                <div class="box-divider m-0"></div>
                <div class="box-body p-v-md">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {!! Form::model($arsip, ['method' => 'PATCH','route' => ['arsip.update',$arsip->id
                    ],'files' => true]) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Nama Arsip :') !!}
                                {!! Form::text('name', null, array('placeholder' => 'Nama Arsip Data','class'
                                => 'form-control'))
                                !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                {!! Form::label('jenis', 'Jenis Arsip :') !!}
                                {!! Form::text('jenis', null, array('placeholder' => 'Nama Jenis Arsip Data','class'
                                => 'form-control'))
                                !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                {!! Form::label('file_path', 'File yang telah diupload :') !!}
                                <a href="{{url('uploads/'.$arsip->file_path)}}" target="blank" class="label green">
                                   {{$arsip->file_path}}
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                {!! Form::label('file', 'Pilih file yang akan diupdate :') !!}
                                {!! Form::file('file', array('placeholder' => 'Nama Jenis Arsip Data','class'
                                => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                {!! Form::label('keterangan', 'Keterangan :') !!}
                                {!! Form::textarea('keterangan', null, array('placeholder' => 'Masukan
                                Keterangan','class'
                                => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
