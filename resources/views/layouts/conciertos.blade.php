<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Conciertos')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body{ background:#E6DFD5; }
    .navbar-custom{ background:#2FA4B3; }
    .card img{ height:200px; object-fit:cover; }
  </style>
</head>
<body>
  @include('components.header')

  <main class="container mt-4">
    @yield('contenido')
  </main>

  @include('components.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>