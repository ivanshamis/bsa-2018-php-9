
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" 
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" 
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" 
          crossorigin="anonymous">

    <style>
        .container {
            padding-top: 20px;
        }

        .help-block {
            color: darkred;
        }
    </style>
</head>
<body>
    @yield('header')
    <div class="container">
        <div class="row">
            <div class="col-md-12 main">
                <h1>@yield('content-title')</h1>
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
