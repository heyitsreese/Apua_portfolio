@include('layouts.header')
@include('layouts.navbar')

<div class="container py-5">
    @yield('content')
</div>

@include('layouts.footer')