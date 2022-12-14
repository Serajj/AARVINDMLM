<link rel="stylesheet" href="{{ url('assets/admin/css/iziToast.min.css') }}">
<script src="{{ url('assets/admin/js/iziToast.min.js') }}"></script>

@if(session()->has('notify'))
    @foreach(session('notify') as $msg)
        <script>
            'use strict';
            iziToast.{{ $msg[0] }}({message:"{{ $msg[1] }}", position: "topRight"});
        </script>
    @endforeach
@endif

@if ($errors->any())
    <script>
        'use strict';
        @foreach ($errors->all() as $error)
        iziToast.error({
            message: '{{ $error }}',
            position: "topRight"
        });
        @endforeach
    </script>

@endif
<script>
    'use strict';
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>
