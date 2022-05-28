@push('scripts')
    <script src="{{asset('plugins/simple-notify/simple-notify.min.js')}}"></script>
@endpush

@push('styles')
    <script src="{{asset('plugins/simple-notify/simple-notify.min.css')}}"></script>
@endpush

<script>
    function toast(type, message){
        new Notify ({
            status: type,
            text: message,
            title: type.charAt(0).toUpperCase() + type.slice(1),
            effect: 'slide',
            autoclose: true,
            showIcon: false,
            autotimeout: 4000,
            speed: 300,
            type: 1
        })
    }

    $(document).ready(() => {
        @if(Session::has('error'))
            toast('error', "{{Session::get('error')}}")
        @elseif (Session::has('success'))
            toast('success', "{{Session::get('success')}}")
        @elseif(isset($errors) && count($errors->all()) > 0)
            toast('error', "Invalid Input fields")
        @endif
    })
</script>
