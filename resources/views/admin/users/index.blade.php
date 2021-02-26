@extends('layouts.master')

@section('content')
<div class="padding">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>User Management</h5>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="box-header">
            <h2>Data User</h2>
        </div>
        <div class="box-tool">
            <ul class="nav">
                <li class="nav-item">
                    <a class="btn btn-sm btn-success" href="{{ route('users.create') }}"> <i
                            class="fa fa-plus mr-2"></i>Tambah User Baru</a>
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
                                id="tabledata1" role="grid" aria-describedby="DataTables_Table_3_info">
                                <thead>
                                    <tr role="row">
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $user)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if(!empty($user->getRoleNames()))
                                            @foreach($user->getRoleNames() as $v)
                                            <p class="label green">{{ $v }}</p>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info"
                                                href="{{ route('users.show',$user->id) }}">Show</a>
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('users.edit',$user->id) }}">Edit</a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy',
                                            $user->id],'style'=>'display:inline']) !!}
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
    {!! $data->render() !!}
</div>
@endsection
