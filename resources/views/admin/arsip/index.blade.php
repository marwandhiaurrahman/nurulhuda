@extends('layouts.master')

@section('content')
<div class="padding">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Data Arsip Management</h5>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="box-header">
            <h2>Tabel Data Arsip</h2>
        </div>
        <div class="box-tool">
            <ul class="nav">
                <li class="nav-item">
                    <a class="btn btn-sm btn-success" href="{{ route('arsip.create') }}">
                        <i class="fa fa-plus mr-2"></i>Upload Arsip Baru</a>
                </li>
            </ul>
        </div>
        <div class="box-divider m-0"></div>
        <div class="box-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="table-responsive">
                <div id="DataTables_Table_3_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table ui-jp="dataTable" class="table table-striped b-t b-b dataTable no-footer"
                                id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
                                <thead>
                                    <tr role="row">
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Jenis</th>
                                        <th>Publisher</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($arsips as $key => $arsip)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $arsip->name }}</td>
                                        <td>{{ $arsip->jenis }}</td>
                                        <td>{{ $arsip->user->name }}</td>
                                        <td>{{ $arsip->keterangan }}</td>
                                        <td>{{ $arsip->created_at }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-success" target="_blank"
                                                href="{{ asset('storage/'.$arsip->file_path) }} ">Buka</a>
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('arsip.edit',$arsip->id) }}">Edit</a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['arsip.destroy',
                                            $arsip->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- {!! $data->render() !!} --}}
</div>
@endsection
