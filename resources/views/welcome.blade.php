<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel 10 App</title>
  </head>
  <body>
    <h1>Laravel Staging App</h1>
    <br>
    <h5>By <a href="https://github.com/ppmint1" target="_blank">@ppmint1</a>, intended to be used as infrastructure testing.</h5>
    <p>Source code publicly available here at <a href="https://github.com/ppmint1/laravel-test" target="_blank"> https://github.com/ppmint1/laravel-test</a></p>
    <br>
    <p>Server IP : <strong>{{ request()->server('SERVER_ADDR') }}</strong></p>
    <p>Your IP : <strong>{{ request()->ip() }}</strong><br>Your IP address may be different from the one used by your current device if you are using a VPN, Proxy, behind NAT, or your ISP uses CGNAT (Carrier-grade NAT). </p>
    <br>
    <p>If you see this, then your server and/or infrastructure is working and this Laravel application was successfully deployed. Congrats :)</p>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
