<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
		
		<link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/sticky-footer-navbar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/sweetalert2.min.css') }}">

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
				<a class="btn btn-default" href="{{ url('/categories') }}" role="button">Welcome</a>
            </div>
        </div>
    </body>
</html>
