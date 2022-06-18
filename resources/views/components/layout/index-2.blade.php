<x-layout.header />
    <body>
        <div class="page-wrapper">
            <x-layout.nav-2 />
            {{$slot}}
            <x-layout.footer/>
        </div>
    </body>
</html>
