<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard Template · Bootstrap</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('dist/style.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div id="app">
        <index></index>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
