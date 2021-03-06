<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
    <body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	    <div class="container">
	        <!-- <a class="navbar-brand" href="#">Escolas</a> -->
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarResponsive">
	            <ul class="navbar-nav ml-auto">
	                <!-- <li class="nav-item active">
	                    <a class="nav-link" href="#">Home
	                <span class="sr-only">(current)</span>
	              </a>
	                </li> -->
	                <li class="nav-item">
	                    <a class="nav-link" href="{{url('/escolas')}}">Escolas</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="{{url('/file/form')}}">Enviar arquivos</a>
	                </li>
	            </ul>
	        </div>
	    </div>
	</nav>
		
    @yield('content')

    <footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
		</div>
      <!-- /.container -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>