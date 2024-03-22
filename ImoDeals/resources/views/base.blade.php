<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name') }}-@yield('title')</title>

   <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
   <link rel="icon" type="image/png" href="{{ asset('assets/img/icone/imo-deals-icon.jpg') }}">
</head>

<body @guest
    style="height: 100vh;"
@endguest>
    {{-- <div class="container-fluid" @guest style="height: 100vh; width:100%;"
    @endguest > --}}

    @include('navbar.nav-bar')

    @yield('contenu')

    {{-- </div> --}}
{{-- ===== ( nos fichiers java script ) ====== --}}
    @include('script')
</body>

</html>
