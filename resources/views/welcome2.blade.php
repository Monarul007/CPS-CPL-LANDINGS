<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>{{ $setting->website_name ?? 'HushCupid' }} | {{ $setting->sub_title ?? 'THE PLACE TO MEET LOVELY PEOPLE!' }}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Canonical SEO -->
    <link rel="canonical" href="https://hushcupid.com/"/>

    <meta name="keywords" content="meet meople, meet movely meople, meet meople mearby, meeting new people, the best place for meeting, place for dating, Chat, Flirt, Socialize, have fun">
    <meta name="description" content="Meet amazing people nearby Waiting for you.You're on the best place for meeting new people nearby! Chat, Flirt, Socialize and have Fun!">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $setting->website_name ?? 'HushCupid' }} | {{ $setting->sub_title ?? 'THE PLACE TO MEET LOVELY PEOPLE!' }}">
    <meta itemprop="description" content="Meet amazing people nearby Waiting for you.">
    <meta itemprop="image" content="https://hushcupid.com/templates/themes/base/img/logo.png">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@hushcupid">
    <meta name="twitter:title" content="THE PLACE TO MEET LOVELY PEOPLE!">
    <meta name="twitter:description" content="Meet amazing people nearby Waiting for you.You're on the best place for meeting new people nearby! Chat, Flirt, Socialize and have Fun!">
    <meta name="twitter:creator" content="@hushcupid">
    <meta name="twitter:image" content="https://hushcupid.com/templates/themes/base/img/logo.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="HushCupid | THE PLACE TO MEET LOVELY PEOPLE!" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://hushcupid.com" />
    <meta property="og:image" content="https://hushcupid.com/templates/themes/base/img/logo.png" />
    <meta property="og:description" content="HushCupid | THE PLACE TO MEET LOVELY PEOPLE! Meet amazing people nearby Waiting for you.You're on the best place for meeting new people nearby! Chat, Flirt, Socialize and have Fun!" />
    <meta property="og:site_name" content="HushCupid" />

	<!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/web/style.css')}}">
	<link href="{{asset('css/paper-bootstrap-wizard.css')}}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{asset('css/demo.css')}}" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
	
	</head>

	<body @if(!empty($design->body_bg)) style="background-image: url('{{ asset('storage/images/'.$design->body_bg) }}')" > @else style="background-image: url('https://images.pexels.com/photos/2632670/pexels-photo-2632670.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-size: cover; background-repeat: no-repeat; background-position: right bottom !important;">@endif
    <nav class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="/">
                    @if (!empty($setting->logo))
                        <img src="{{ asset('storage/images/'.$setting->logo) }}" alt="HushCupid" width="40" style="margin-top: 4px; margin-right: 4px;">
                    @else
                        <img src="https://www.hushcupid.com/templates/themes/base/img/logo.png" alt="HushCupid" width="40" style="margin-top: 4px; margin-right: 4px;">
                    @endif
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="https://hushcupid.com/pages/details/?page=1">About <span class="sr-only">(current)</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-top: 6px;">
                <li><a href="https://hushcupid.com/login" type="button" class="btn btn-primary">LOGIN</a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

	<div class="image-container set-full-height">

		<!--  Made With HushCupid  -->
		<a href="https://hushcupid.com/" class="made-with-pk">
			<div class="brand">HC</div>
			<div class="made-with">Made By <strong>HushCupid</strong></div>
		</a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-md-10 col-md-offset-1">
                    @include('layouts.'.$setting->form)
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	            Aleardy Have An Account? Login <a class="text-purple" href="https://hushcupid.com/login">here.</a>
	        </div>
	    </div>
	</div>
</body>

	<!--   Core JS Files   -->
	<script src="{{asset('js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{asset('js/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="{{asset('js/jquery.validate.min.js')}}" type="text/javascript"></script>

</html>
