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
                <form ui-jp="parsley" action="{{ url('calonsiswa.store') }}" method="POST">
                    @csrf

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Foto</label>
                      <div class="col-sm-6">
                        
                        <label for="profile_image"></label>
                        <img id="preview_img" src="https://www.w3adda.com/wp-content/uploads/2019/09/No_Image-128.png" class="" width="200" height="150"/>
                        <input type="file" name="profile_image" id="profile_image" onchange="loadPreview(this);" class="form-control">
                      </div>
                    </div>
                        @if (!Auth::user()->is_admin)
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label text-bold">No Pendaftaran</label>
                          <div class="col-sm-6">
                              : 2021010001
                          </div>
                        </div>
                        @endif
                        <div class="box-body">                    
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label text-bold">Nama Lengkap</label>
                            <div class="col-sm-6">
                                {!! Form::text('name', null, array('placeholder' => 'Masukan Nama Lengkap','class' => 'form-control','required' => '')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label text-bold">Username</label>
                            <div class="col-sm-6">
                                {!! Form::text('username', Auth::user()->name, array('placeholder' => 'Masukan Username','class' => 'form-control','required' => '')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label text-bold">Email</label>
                          <div class="col-sm-6">
                            {!! Form::email('email', null, array('placeholder' => 'Masukan Email','class' => 'form-control', 'minlength' => '6', 'required' => '', 'disabled' => 'true')) !!}
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label text-bold">Password/PIN Lama<span class="text-red">*</span></label>
                          <div class="col-sm-6">
                            {!! Form::password('password-old', array('placeholder' => 'Masukan Password/PIN minimal 6 digit','class' => 'form-control', 'minlength' => '6', 'required' => '', 'id' => 'password')) !!}
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label text-bold">Password/PIN Baru<span class="text-red">*</span></label>
                          <div class="col-sm-6">
                            {!! Form::password('password', array('placeholder' => 'Masukan Password/PIN minimal 6 digit','class' => 'form-control', 'minlength' => '6', 'required' => '', 'id' => 'password1')) !!}
                          </div>
                        </div>
        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label text-bold">Konrirmasi Password/PIN Baru<span class="text-red">*</span></label>
                          <div class="col-sm-6">
                            {!! Form::password('password', array('placeholder' => 'Masukan Password/PIN minimal 6 digit','class' => 'form-control', 'minlength' => '6', 'required' => '', 'id' => 'password2')) !!}
                            <div id="CheckPasswordMatch"></div>
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
                  </form>
              </div>
            </div>
</div>
</div>
</div>
<script>
  function loadPreview(input, id) {
    id = id || '#preview_img';
    if (input.files && input.files[0]) {
        var reader = new FileReader();
 
        reader.onload = function (e) {
            $(id)
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
        };
 
        reader.readAsDataURL(input.files[0]);
    }
 }
</script>
@endsection