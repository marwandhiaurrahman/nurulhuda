@extends('layouts.master')

@section('content')
<div class="padding">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Role Management</h5>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="box-header">
            <h2>Data Role</h2>
        </div>
        <div class="box-tool">
            <ul class="nav">
                <li class="nav-item">
                    <a class="btn btn-sm btn-success" href="{{ route('roles.create') }}"> <i
                            class="fa fa-plus mr-2"></i>Tambah Role</a>
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
                                        <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $key => $role)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-info"
                                                href="{{ route('roles.show',$role->id) }}">Show</a>
                                            @can('role-edit')
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                            @endcan
                                            @can('role-delete')
                                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy',
                                            $role->id],'style'=>'display:inline'])
                                            !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                            {!! Form::close() !!}
                                            @endcan
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
    {!! $roles->render() !!}
</div>
@endsection
