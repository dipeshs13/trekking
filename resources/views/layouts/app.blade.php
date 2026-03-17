<!DOCTYPE html>
<html>
<head>
    <title>Everest Trekking Routes</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.10/css/intlTelInput.css" integrity="sha512..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.22/dist/sweetalert2.min.css" integrity="sha256-YKKnn5oXErZthQwr01oz4mEVF11gcVMJYcmUuhoyUgM=" crossorigin="anonymous">
    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    @include('partials.navbar.top')
    @include('partials.navbar.main')
    <main>
        @yield('content')
    </main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.22/dist/sweetalert2.all.min.js" integrity="sha256-OPNtaJu+pOAMnTiPOFAHS6w5LLIlsOqOFtoLcHXbpug=" crossorigin="anonymous"></script>

<script>
    axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
</script>

</body>
</html>
