<!DOCTYPE html>
<html>
	<head>
		<title>Fiji Web Solution</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="/css/style.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" href="">
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#home" class="navbar-brand"><img src="img/lion.png" alt="FijiWebDesign Logo"></a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-main">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/#home" class="active">HOME</a></li>
						<li><a href="/#about">ABOUT</a></li>
						<li><a href="/#services">SERVICES</a></li>
						<li><a href="/#portfolio">PORTFOLIO</a></li>
						<li><a href="/#pricing">PRICING</a></li>
						<li><a href="/#contact">CONTACT</a></li>
					</ul>	
				</div>
			</div>
        </nav>
        <div class="padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                                @if(count($errors) > 0)
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                        
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                            @endif
                        
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{session('error')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        <footer id="contact" class="container-fluid text-center">
            <div class="row">
                <div class="col-sm-4">
                    <h5>SHARE</h5>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffijiwebdesign.cf%2F&amp;src=sdkpreparse" class="fa fa-facebook"></a>
                </div>
                <div class="col-sm-4">
                    <h5>&copy; FIJI WEB DESIGN 2018</h5>	
                </div>
                <div class="col-sm-4">
                    <img src="img/logo3.png" class="icon" alt="">
                </div>
            </div>
        </footer>