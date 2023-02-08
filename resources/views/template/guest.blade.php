<!DOCTYPE html>
<html lang="en">

<head>
    <!-- style css -->
    @include('components.style')
</head>

<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- JS -->
    @include('components.script')
</body>

</html>
