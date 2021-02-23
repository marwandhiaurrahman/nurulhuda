@extends('layouts.master')

@section('content')
<div class="p-a white lt box-shadow">
	<div class="row">
		<div class="col-sm-6">
			<h4 class="mb-0 _300">Selamat Datang {{ Auth::user()->name }}</h4>
			<small class="text-muted">Sistem Akademik Nurul Huda Kertawangunan</small>
		</div>
	</div>
</div>
@endsection
