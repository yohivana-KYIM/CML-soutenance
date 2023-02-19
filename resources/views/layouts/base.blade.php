<!DOCTYPE html>
<html @if(\Request::is('rtl')) lang="ar" dir="rtl" @else lang="en" @endif>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
    <title>Dashboard</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- Main Styling -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com" defer></script>

    @livewireStyles

</head>
<body class="m-0 font-sans antialiased font-normal text-size-base leading-default bg-gray-50 text-slate-500">
    {{ $slot }}

    @livewireScripts

<!-- plugin for charts  -->
<script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
<!-- plugin for scrollbar  -->
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<!-- GitHub button -->
<script src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="{{ asset('assets/js/soft-ui-dashboard-tailwind.js') }}"></script>

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js"></script>
<script defer>
    window.addEventListener('load', () => {
        if (window.frameElement) {
            window.frameElement.height = document.body.scrollHeight + 'px'
        }
    });
</script>
</body>
</html>
