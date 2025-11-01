<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title','Personal')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="{{ asset('assets/template/assets/favicon.ico') }}">

  <!-- Vendor CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-RandomHash" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v6.5.2/css/all.css" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/template/css/styles.css') }}">

  @stack('styles')
</head>
<body id="page-top">
  @include('partials.header')

  <main>@yield('content')</main>

  @include('partials.footer')

  <!-- Vendor JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-RandomHash2" crossorigin="anonymous"></script>

  <!-- Template JS -->
  <script src="{{ asset('assets/template/js/scripts.js') }}"></script>

  @stack('scripts')
</body>
</html>
