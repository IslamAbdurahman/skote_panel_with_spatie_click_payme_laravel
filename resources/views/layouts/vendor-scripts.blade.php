<!-- JAVASCRIPT -->
<script src="{{ URL::asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/metismenu/metismenu.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/node-waves/node-waves.min.js')}}"></script>
<script>
    $('#change-password').on('submit',function(event){
        event.preventDefault();
        var Id = $('#data_id').val();
        var current_password = $('#current-password').val();
        var password = $('#password').val();
        var password_confirm = $('#password-confirm').val();
        $('#current_passwordError').text('');
        $('#passwordError').text('');
        $('#password_confirmError').text('');
        $.ajax({
            url: "{{ url('update-password') }}" + "/" + Id,
            type:"POST",
            data:{
                "current_password": current_password,
                "password": password,
                "password_confirmation": password_confirm,
                "_token": "{{ csrf_token() }}",
            },
            success:function(response){
                $('#current_passwordError').text('');
                $('#passwordError').text('');
                $('#password_confirmError').text('');
                if(response.isSuccess == false){
                    $('#current_passwordError').text(response.Message);
                }else if(response.isSuccess == true){
                    setTimeout(function () {
                        window.location.href = "{{ route('root') }}";
                    }, 1000);
                }
            },
            error: function(response) {
                $('#current_passwordError').text(response.responseJSON.errors.current_password);
                $('#passwordError').text(response.responseJSON.errors.password);
                $('#password_confirmError').text(response.responseJSON.errors.password_confirmation);
            }
        });
    });
</script>


<script src="{{ asset('/assets/libs/toastr/toastr.min.js') }}"></script>

<script>
    function succesToast(message) {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            timeOut: 3000, // Time to close the toast in milliseconds (adjust as needed)
            positionClass: 'toast-bottom-right', // Set the position to bottom right
        };

        toastr.success(message);
    }

    function dangerToast(message,header) {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            timeOut: 3000, // Time to close the toast in milliseconds (adjust as needed)
            positionClass: 'toast-bottom-right', // Set the position to bottom right
        };

        toastr.error(message,header);
    }

    @if(session('success'))
    succesToast('{{ session('success') }}',document.title)
    @elseif(session('error'))
    dangerToast('{{ session('error') }}',document.title)
    @endif

    {{--    @if(session('success'))--}}
    {{--    toastr.success('{{ session('success') }}');--}}
    {{--    @endif--}}
    {{--    @if(session('error'))--}}
    {{--    toastr.error('{{ session('error') }}');--}}
    {{--    @endif--}}

    {{--    @if(session('info'))--}}
    {{--    toastr.info('{{ session('info') }}');--}}
    {{--    @endif--}}

    {{--    @if(session('warning'))--}}
    {{--    toastr.warning('{{ session('warning') }}');--}}
    {{--    @endif--}}
</script>

@yield('script')

<!-- App js -->
<script src="{{ URL::asset('assets/js/app.min.js')}}"></script>

@yield('script-bottom')
