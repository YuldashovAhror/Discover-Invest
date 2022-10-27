<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.dashboard.links')
</head>
<body>
    @include('components.dashboard.sidebar')
    @include('components.dashboard.header')
    <div class="page-wrapper">
        <div class="page-content">
        @yield('content')
        </div>
    </div>        
    {{-- @include('components.dashboard.footer')             --}}
    @include('components.dashboard.scripts')
</body>
</html>

