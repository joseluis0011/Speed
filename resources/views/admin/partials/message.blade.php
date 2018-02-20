<script>
    @if(Session::has('error_portal'))
       Materialize.toast('{{Session::get('error_portal')}}', 4000);
    @endif
    @if(Session::has('password_success'))
       Materialize.toast('{{Session::get('password_success')}}', 5000);
    @endif
    @if(Session::has('cli_new'))
       Materialize.toast('{{Session::get('cli_new')}}', 5000);
    @endif
    @if(Session::has('cli_new_error'))
       Materialize.toast('{{Session::get('cli_new_error')}}', 5000);
    @endif

    @if(Session::has('webpage_update'))
       Materialize.toast('{{Session::get('webpage_update')}}', 5000);
    @endif

    @if(Session::has('error'))
       Materialize.toast('{{Session::get('error')}}', 5000);
    @endif

    @if(Session::has('pago_success'))
       Materialize.toast('{{Session::get('pago_success')}}', 5000);
    @endif

    @if(Session::has('success'))
       Materialize.toast('{{Session::get('success')}}', 5000);
    @endif




</script>
