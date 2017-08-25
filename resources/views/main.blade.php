
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
@yield('title')
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i|Roboto+Mono" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="/css/style.css">

	<!-- Modernizr JS -->
	<script src="/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>

@section ('header')
     
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 text-left">
					<div id="gtco-logo"><a href="/">Blog<span>.</span></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="has-dropdown">
							<a>Теги</a>
							<ul class="dropdown">
								<li><a href="{{ route('tags', array('id'=>'1')) }}">Футбол</a></li>
								<li><a href="{{ route('tags', array('id'=>'2')) }}">Баскетбол</a></li>
								<li><a href="{{ route('tags', array('id'=>'3')) }}">Теннис</a></li>
								<li><a href="{{ route('tags', array('id'=>'4')) }}">ЦИК</a></li>
								<li><a href="{{ route('tags', array('id'=>'5')) }}">Министр</a></li>
								<li><a href="{{ route('tags', array('id'=>'6')) }}">Депутат</a></li>
								<li><a href="{{ route('tags', array('id'=>'7')) }}">Репортер</a></li>
								<li><a href="{{ route('tags', array('id'=>'8')) }}">Парад</a></li>
							</ul>
						</li>
						
						<li class="has-dropdown">
							<a>Категории</a>
							<ul class="dropdown">
								<li><a href="{{ route('categories', array('id'=>'3')) }}">Политика</a></li>
								<li><a href="{{ route('categories', array('id'=>'2')) }}">Культура</a></li>
								<li><a href="{{ route('categories', array('id'=>'1')) }}">Спорт</a></li>
							</ul>
						</li>
						<li><a href="{{ route('about') }}">О проекте</a></li>
						<li><a href="{{ route('contact') }}">Контакты</a></li>
						@section ('name')
                                                    @if (Auth::guest())
                                                        <li><a href="{{ route('login') }}">Вход</a></li>
                                                    @else
                                                        <li>
                                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                                            Выход, {{Auth::user()->name}}
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                                        {{ csrf_field() }}
                                                            </form>
                                                        </li>
                                                    @endif
                                                @show
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(/images/img_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<h1 class="mb30">Самые свежие новости с просторов интернета</a></h1>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
@show

@yield('content')

@section ('footer')	
	<footer id="gtco-footer" role="contentinfo">
		<div class="container">
			
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2017 Free HTML5. Все права внатуре защищены. Реально!</small> 
						<small class="block">Шаблон был честно с***н с сайта <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="/js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="/js/main.js"></script>

	</body>
</html>

@show


