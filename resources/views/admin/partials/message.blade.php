<script>
    @if(Session::has('error_portal'))
       Materialize.toast('{{Session::get('error_portal')}}', 4000);
    @endif
    @if(Session::has('password_success'))
       Materialize.toast('{{Session::get('password_success')}}', 5000);
    @endif
    @if(Session::has('webpage_update'))
       Materialize.toast('{{Session::get('webpage_update')}}', 5000);
    @endif



    @if(Session::has('pago_success'))
       Materialize.toast('{{Session::get('pago_success')}}', 5000);
    @endif

    @if(Session::has('success'))
       iziToast.success({ title: 'OK',message: '{{Session::get('success')}}',});
    @endif
    @if(Session::has('error'))
       iziToast.success({ title: 'OK',message: '{{Session::get('error')}}',
    });
    @endif



</script>
