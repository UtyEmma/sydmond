@push('scripts')
    <script src="{{asset('plugins/maginific-pop/magnific-pop.js')}}"></script>
    <script>
        $('.parent-container').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image'
        });
    </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{asset('plugins/maginific-pop/magnific-pop.css')}}">
@endpush

<div class="{{$name ?? 'mp-lightbox'}}">
    {{$slot}}
  </div>
