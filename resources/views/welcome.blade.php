<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}</title>
  @viteReactRefresh
  @vite(['resources/js/app.jsx', 'resources/css/app.css'])
</head>
<body class="bg-gray-900 h-screen w-screen">
  <div class="container mx-auto">
    <div id="app"></div>
  </div>
</body>
</html>