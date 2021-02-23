{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Sign Up - Sistem Informasi Yayasan Nurul Huda Kertawangunan</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="{!! asset('assets/assets/images/logo.png') !!}">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <!-- icon -->
    <link rel="shortcut icon" href="{!! asset('assets/images/yayasannurulhuda.ico') !!}">

    @include('layouts.partials.css')

</head>

<div class="app" id="app">

    <!-- ############ LAYOUT START-->
      <div class="center-block full-w-xxl w-auto-xs p-y-md">
        <div class="navbar">
          <div class="pull-center">
            <div class="text-center">
              <img src="{{url('assets/images/logo_ponpesnurulhuda.png')}}" class="apps">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
              <div class="m-b text-lg text-center">
                Pendaftaran Calon Peserta Didik <strong>Gelombang 2, 2020/2021</strong>
              </div>
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
              <form ui-jp="parsley" action="" method="POST">
                @csrf
                <div class="box">
                  <div class="box-body">
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Tingkat/Kelas<span class="text-red">*</span></label>
                      <div class="col-sm-5">
                        {!! Form::select('tingkat', [
                            '1' => 'Tingkat Kelas 1',
                            '2' => 'Tingkat Kelas 2',
                            '3' => 'Tingkat Kelas 3',
                            '4' => 'Tingkat Kelas 4',
                            '5' => 'Tingkat Kelas 5',
                            '6' => 'Tingkat Kelas 6'],
                             null, ['placeholder' => 'Pilih Tingkat/kelas','class' => 'form-control c-select', 'required' => '']) !!}
                      </div>
                    </div>
                    <hr>
                    <div class="form-group row mt-5">
                      <label class="col-sm-3 form-control-label text-bold">Email<span class="text-red">*</span></label>
                      <div class="col-sm-7">
                        {!! Form::email('email_siswa', null, array('placeholder' => 'Masukan Email','class' => 'form-control', 'minlength' => '6', 'required')) !!}
                        <p style="font-size: 8pt;">Email harus email aktif, karena link informasi & validasi akan dikirimkan melalui email</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Password/PIN<span class="text-red">*</span></label>
                      <div class="col-sm-6">
                        {!! Form::password('password', array('placeholder' => 'Masukan Password/PIN minimal 6 digit','class' => 'form-control', 'minlength' => '6', 'required' => '', 'id' => 'password1')) !!}
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Konrirmasi Password/PIN<span class="text-red">*</span></label>
                      <div class="col-sm-6">
                        {!! Form::password('password', array('placeholder' => 'Masukan Password/PIN minimal 6 digit','class' => 'form-control', 'minlength' => '6', 'required' => '', 'id' => 'password2')) !!}
                        {{-- <input type="password" name="password2" id="password2" minlength="6" class="form-control" placeholder="Masukan Password/PIN minimal 6 digit" required> --}}
                        <div id="CheckPasswordMatch"></div>
                      </div>
                    </div>
                    {{ Form::hidden('status', 'Calon Siswa') }}
                    <hr class="mt-5">
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">NISN</label>
                      <div class="col-sm-7">
                        {!! Form::text('nisn', null, array('placeholder' => 'Nomor Induk Siswa Nasional','class' => 'form-control nomor', 'maxlength' => '10', 'required' => '', 'data-parsley-length' => '[6, 10]')) !!}
                        <p style="font-size: 8pt;">Silahkan klik <a href="https://referensi.data.kemdikbud.go.id/nisn/" class="text-bold">disini</a> untuk mengecek NISN anda </p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Nama Lengkap Peserta Didik<span class="text-red">*</span></label>
                      <div class="col-sm-9">
                        {!! Form::text('nama_calon_siswa', null, array('placeholder' => 'Nama Lengkap','class' => 'form-control','required' => '')) !!}
                        <p style="font-size: 8pt;">Isikan nama lengkap sesuai dengan akta / ijazah terakhir</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Jenjang yang dituju<span class="text-red">*</span></label>
                      <div class="col-sm-5">
                        {!! Form::select('jenjang', [
                            'SDIT' => 'SDIT Al-Huda',
                            'SMPIT' => 'SMPIT Al-Huda',
                            'MA' => 'MA Nurul Huda'],
                             null, ['placeholder' => 'Pilih Jenjang','class' => 'form-control c-select', 'required' => '']) !!}
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Tempat / Tanggal Lahir<span class="text-red">*</span></label>
                      <div class="col-sm-4">
                        {!! Form::text('tempat', null, array('placeholder' => 'Tempat','class' => 'form-control','required' => '')) !!}
                      </div>
                      <div class="col-sm-4">

                        <div class="form-group">
                          <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                                icons: {
                                  time: 'fa fa-clock-o',
                                  date: 'fa fa-calendar',
                                  up: 'fa fa-chevron-up',
                                  down: 'fa fa-chevron-down',
                                  previous: 'fa fa-chevron-left',
                                  next: 'fa fa-chevron-right',
                                  today: 'fa fa-screenshot',
                                  clear: 'fa fa-trash',
                                  close: 'fa fa-remove'
                                }
                              }">
                              <input type='text' class="form-control" name="tgl_lahir">
                              <span class="input-group-addon">
                                  <span class="fa fa-calendar"></span>
                              </span>
                          </div>
                      </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Jenis Kelamin<span class="text-red">*</span></label>
                      <div class="col-sm-9">
                        <div class="radio">
                          <label class="ui-check">
                            {{-- <input type="radio" name="jenis_kelamin" value="L" class="has-value"> --}}
                            {!! Form::radio('jenis_kelamin', 'L', array('class' => 'has-value','required' => '')) !!}
                            <i class="dark-white"></i>
                            Laki-laki
                          </label>
                          <label class="ui-check ml-3">
                            <input type="radio" name="jenis_kelamin" value="P" class="has-value">
                            <i class="dark-white"></i>
                            Perempuan
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Alamat<span class="text-red">*</span></label>
                      <div class="col-sm-7">
                        <textarea class="form-control" name="alamat" rows="3" data-minwords="6" required placeholder="Masukan alamat"></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Provinsi<span class="text-red">*</span></label>
                      <div class="col-sm-5">
                        <select required name="provinsi" id="provinsi" class="form-control c-select">
                          <option value="">Pilih Provinsi</option>
                          @foreach ($data_provinsi['provinsi'] as $d_prov)
                            <option value="{{$d_prov['id']}}">{{$d_prov['nama']}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Kabupaten/Kota<span class="text-red">*</span></label>
                      <div class="col-sm-5">
                        {{-- {!! Form::select('kabupaten_kota',
                             null, ['placeholder' => 'Pilih Kabupaten/Kota','class' => 'form-control c-select', 'required' => '', 'id' => 'kabupaten_kota']) !!} --}}
                      <select required name="kabupaten_kota" id="kabupaten_kota" class="form-control c-select">
                        <option value="">Pilih Provinsi</option>
                      </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Nomor HP (Whatsapp)<span class="text-red">*</span></label>
                      <div class="col-sm-5">
                        {!! Form::text('no_hp', null, array('placeholder' => 'format (089123456789)','class' => 'form-control nomor','required' => '', 'maxlength' => '15')) !!}
                        <p style="font-size: 8pt;">Nomer Handphone harus aktif dengan format (08123456789))</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Asal Sekolah<span class="text-red">*</span></label>
                      <div class="col-sm-9">
                        {!! Form::text('asal_sekolah', null, array('placeholder' => 'Asal Sekolah sebelumnya','class' => 'form-control','required' => '')) !!}
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Nama Ibu Kandung<span class="text-red">*</span></label>
                      <div class="col-sm-9">
                        {!! Form::text('nama_ibu', null, array('placeholder' => 'Nama Lengkap Ibu Kandung','class' => 'form-control','required' => '')) !!}
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Jalur<span class="text-red">*</span></label>
                      <div class="col-sm-5">
                        {!! Form::select('jalur', [
                            '1' => 'Umum',
                            '2' => 'Prestasi',],
                             null, ['placeholder' => 'Pilih Jalur','class' => 'form-control c-select', 'required' => '']) !!}
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold">Program Kelas<span class="text-red">*</span></label>
                      <div class="col-sm-5">
                        {!! Form::select('program', [
                            '1' => 'Reguler',
                            '2' => 'Prestasi'],
                             null, ['placeholder' => 'Pilih Program kelas','class' => 'form-control c-select', 'required' => '']) !!}
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label text-bold"></label>
                      <div class="col-sm-9">
                        <div class="checkbox">
                          <label class="checkbox ui-check">
                            <input type="checkbox" name="inlineCheckbox1" value="option1" required data-parsley-error-message="Untuk melanjutkan kamu harus setuju." required><i></i> Ya, saya setuju dengan persyaratan dan ketentuan, bahwa seluruh data yang saya isikan adalah benar, sah, legal dan sesuai dengan keadaan kenyataan.
                          </label>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="dker p-a text-right">
                  <div class="form-group row">
                    <label class="col-sm-3 form-control-label text-bold"></label>
                    <div class="col-sm-9">
                        <button type="submit" id="daftar" class="btn info" style="float: left; cursor: pointer;">Mendaftar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="p-v-lg text-center">
          <div>Sudah punya akun? silahkan <a ui-sref="access.signin" href="{{url('/login')}}" class="text-primary _600">Login</a></div>
        </div>
      </div>

    <!-- ############ LAYOUT END-->

      </div>

      <!-- build:js scripts/app.html.js -->
    @include('layouts.partials.script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        function checkPasswordMatch() {

        }
        $(document).ready(function () {
           $("#password2").on('keyup', function(){
            var password = $("#password1").val();
            var confirmPassword = $("#password2").val();
            if (password != confirmPassword)
                $("#CheckPasswordMatch").html("Password tidak sama!").removeClass().addClass('text-red');
                // $("#daftar").value("TESSS");
            else
                $("#CheckPasswordMatch").html("Passwords sama.").removeClass().addClass('text-primary');;
                // $(':input[type="submit"]').prop('disabled', false);
           });
        });

        $(".nomor").on("keypress keyup blur",function (event) {
               $(this).val($(this).val().replace(/[^\d].+/, ""));
                if ((event.which < 48 || event.which > 57)) {
                    event.preventDefault();
                }
            });

            $(function () {
        $('#provinsi').on('change', function () {
            axios.post('{{ route('dependent-dropdown.store') }}', {id: $(this).val()})
                .then(function (response) {
                    $('#kabupaten_kota').empty();

                    $.each(response.data.kota_kabupaten, function (key, value) {
                        $('#kabupaten_kota').append(new Option(value.nama, key.id))
                        // $('#kabupaten_kota').html(name, id)
                    })
                });
        });
    });
        </script>
    <!-- endbuild -->
</body>
</html>
