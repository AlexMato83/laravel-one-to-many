<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>EMPLOYEE_DB</title>
  </head>
  <body>
    <header>
      @include('components.header')
    </header>
    <main>
      @yield('main')
    </main>
    <footer>
      @include('components.footer')
    </footer>
  </body>
</html>
