<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

{{-- <script src="{{asset('libs/jquery/jquery/dist/jquery.js')}}"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>

<!-- Bootstrap -->
<script src="{{asset('libs/jquery/tether/dist/js/tether.min.js')}}"></script>
<script src="{{asset('libs/jquery/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- core -->
<script src="{{asset('libs/jquery/underscore/underscore-min.js')}}"></script>
<script src="{{asset('libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js')}}"></script>
<script src="{{asset('libs/jquery/PACE/pace.min.js')}}"></script>

{{-- material design --}}
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

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

$(document).ready(function() {
    $('#tabledata1').DataTable();
} );

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

