<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel PPWEB</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/sticky-footer-navbar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/sweetalert2.min.css') }}">

		<style type="text/css">
            h1 { margin-bottom: 40px; }
            label { cursor: hand; cursor: pointer; }
        </style>
		
	</head>
	<body { padding-bottom: 70px; }>
		 <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Junior Pos</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/categories') }}">Category</a></li>
						<li><a href="{{ url('/customers') }}">Customers</a></li>
						<li><a href="{{ url('/employee') }}">Employees</a></li>
						<li><a href="{{ url('/products') }}">Products</a></li>
						<li><a href="{{ url('/shippers') }}">Shippers</a></li>
						<li><a href="{{ url('/suppliers') }}">Supplier</a></li>
						<li><a href="{{ url('/order') }}">Order</a></li>
                    </ul>
					
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
							<button type="submit" class="btn btn-default">Search</button>
					</form>
                </div>
            </div>
        </nav>
		
		<div class="container">
            @if (session('pesan_sukses'))
                @include('_alert.success')
            @endif

            @if (session('pesan_gagal'))
                @include('_alert.failed')
            @endif

            @yield('konten_utama')
        </div>
		
		<footer class="footer">
            <div class="container">
                <center><p class="text-muted">&copy; Adit Junior - 2016</p></center>
            </div>
        </footer>
		
		<script type="text/javascript" src="{{ asset('public/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/sweetalert2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/common.js') }}"></script>
	</body>
	
</html>