<!DOCTYPE html>
<<<<<<< HEAD
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
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
    </body>
</html>
=======
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{ config('app.name') }}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
              integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- Bootstrap 5 Navbar -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
          <div class="container-fluid">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href={{route('bookings.create')}}>Name Create Bookings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('members.index')}}>Members List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('courts.create')}}>Name Create Bookings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('bookings.index')}}>Show Bookings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('members.store')}}>members Store</a>
              </li>
            </ul>
          </div>
        </nav>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- Well for left side of the page (to compensate for widescreen) -->
                    <div class="col-lg-2"></div>
                    <!-- Slot for content from Lower Level views with sections called 'content' pulled in here -->
                    <div class="col-lg-8"> @yield('content') </div>
                    <!-- Well for right side of the page (to compensate for widescreen) -->
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
        <!-- Webpack mix npm generated -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}"></script>
        @stack('js_scripts')
    </body>
</html>
>>>>>>> d08147f4bfafb4b9151715e0eae3614aaeeff84e
