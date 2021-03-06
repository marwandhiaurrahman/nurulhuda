@extends('layouts.master')

@section('content')

<div class="padding">
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header">
                    <h2>Buat Tahun Ajaran Baru</h2>
                    <small>Tambahkan identitas</small>
                </div>
                <div class="box-tool">
                    <ul class="nav">
                        <li class="nav-item inline">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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
                    {!! Form::open(array('route' => 'tahun-ajaran.store','method'=>'POST')) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Nama Tahun Ajaran :') !!}
                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control'))
                                !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                {!! Form::label('tgl_awal', 'Tanggal Awal Pendaftaran :') !!}
                                {!! Form::date('tgl_awal', \Carbon\Carbon::now(), array('placeholder' => 'Tanggal Awal
                                Penerimaan','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                {!! Form::label('tgl_akhir', 'Tanggal Akhir Pendaftaran :') !!}
                                {!! Form::date('tgl_akhir', \Carbon\Carbon::now(), array('placeholder' => 'Tanggal Akhir
                                Penerimaan','class' => 'form-control')) !!}

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
