<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" charset="utf-8"></script>
    <title>Laravel</title>
  </head>
  <body>
    <div id="home">
      <div class="container">
        <div class="row">
          <div class="header">
            @include('header')
          </div>
        </div>
        <div class="row">
          <div class="content">
            @yield('content')
          </div>
        </div>
        <div class="row">
          <div class="footer">
            @include('footer')
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
