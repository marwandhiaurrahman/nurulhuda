<!-- jQuery -->
<script src="{{asset('libs/jquery/jquery/dist/jquery.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('libs/jquery/tether/dist/js/tether.min.js')}}"></script>
<script src="{{asset('libs/jquery/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- core -->
<script src="{{asset('libs/jquery/underscore/underscore-min.js')}}"></script>
<script src="{{asset('libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js')}}"></script>
<script src="{{asset('libs/jquery/PACE/pace.min.js')}}"></script>

<script src="{{asset('scripts/config.lazyload.js')}}"></script>

<script src="{{asset('scripts/palette.js')}}"></script>
<script src="{{asset('scripts/ui-load.js')}}"></script>
<script src="{{asset('scripts/ui-jp.js')}}"></script>
<script src="{{asset('scripts/ui-include.js')}}"></script>
<script src="{{asset('scripts/ui-device.js')}}"></script>
<script src="{{asset('scripts/ui-form.js')}}"></script>
<script src="{{asset('scripts/ui-nav.js')}}"></script>
<script src="{{asset('scripts/ui-screenfull.js')}}"></script>
<script src="{{asset('scripts/ui-scroll-to.js')}}"></script>
<script src="{{asset('scripts/ui-toggle-class.js')}}"></script>

<script src="{{asset('scripts/app.js')}}"></script>

<!-- ajax -->
<script src="{{asset('libs/jquery/jquery-pjax/jquery.pjax.js')}}"></script>
<script src="{{asset('scripts/ajax.js')}}"></script>

{{-- Custom script --}}
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>

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

