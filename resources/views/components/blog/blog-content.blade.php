@php
    $count = 1;
@endphp

@forelse ($posts as $post)
    @if ($count === 2 || $count === 3)
        @include('components.blog.post-two')
    @else
        @include('components.blog.post-one')
    @endif
    @php
        $count++;
    @endphp
@empty
    <div >
        <h2>Sorry!</h2>
        <h3>There are no Blog Posts available at this time</h3>
    </div>
@endforelse
