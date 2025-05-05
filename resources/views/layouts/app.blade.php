<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pengelolaan Tugas Kuliah</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
          .card:hover {
            transform: scale(1.02);
            transition: 0.2s ease;
          }
        </style>
      </head>
<body>

  @include('components.navbar')

  <div class="container mt-4">
    @yield('content')
  </div>

  @include('components.footer')

</body>
</html>
