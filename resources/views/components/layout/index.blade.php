@include('components.layout.header')
    <body>
        <div class="page-wrapper">
            @include('components.layout.nav')

            {{$slot}}
            @include('components.layout.footer')
        </div>
    </body>
</html>
