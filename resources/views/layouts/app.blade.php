<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta name="norton-safeweb-site-verification" content="-du9urh2kz3l-yax6fspc30p3vcps9ugaoc9awy3crjt4n-flxroqojgnqbg5epxzhe-b5zyhi3f5lakn2awavyuqoi16iyy5vh865u0y49pmvqt9xd7lid3p3zq49g4" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- CSS DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/datatables.net-dt/css/jquery.dataTables.css') }}">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}">

    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/toastr/toastr.min.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- jQuery -->
    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>

    <!-- JS DataTables -->
    <script src="{{ asset('assets/datatables.net/js/jquery.dataTables.min.js') }}" defer></script>
    <script src="{{ asset('assets/datatables.net-dt/js/dataTables.dataTables.min.js') }}" defer></script>

    <!-- CKEditor -->
    <script src="{{ asset('assets/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

    <!-- SweetAlert2 -->
    <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('assets/toastr/toastr.min.js') }}"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- Scripts JS -->
    @stack('scripts-js')

    <script>
        $(function(){
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
            @endif
    
            @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}");
            @endif
    
            @if(Session::has('warning'))
                toastr.warning("{{ Session::get('warning') }}");
            @endif
    
            @if(Session::has('error'))
                toastr.error("{{ Session::get('error') }}");
            @endif
        });
    </script>
</body>

</html>
