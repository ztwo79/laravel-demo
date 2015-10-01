<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="buttoon" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">網頁設計</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#rwd">RWD自適應網頁</a></li>
				</ul>
                <ul class="nav navbar-nav">
                    <li><a href="#sample">範例網站</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">聯絡我們</a></li>
                </ul>

				{{--<ul class="nav navbar-nav navbar-right">--}}
					{{--@if (Auth::guest())--}}
						{{--<li><a href="{{ url('/auth/login') }}">Login</a></li>--}}
						{{--<li><a href="{{ url('/auth/register') }}">Register</a></li>--}}
					{{--@else--}}
						{{--<li class="dropdown">--}}
							{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>--}}
							{{--<ul class="dropdown-menu" role="menu">--}}
								{{--<li><a href="{{ url('/auth/logout') }}">Logout</a></li>--}}
							{{--</ul>--}}
						{{--</li>--}}
					{{--@endif--}}
				{{--</ul>--}}
			</div>
		</div>
	</nav>

    <!-- Carousel  -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="http://mobileseopros.com/wp-content/uploads/2014/09/responsive_web_design.jpg" alt="First slide">
                <div class="container">
                    {{--<div class="carousel-caption">--}}
                        {{--<p><a class="btn btn-lg btn-primary" href="#" role="button">了解更多</a></p>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="http://sifuweb.com/wp-content/uploads/2013/10/web-design.png" alt="Second slide">
                <div class="container">
                    {{--<div class="carousel-caption">--}}
                        {{--<h1>Another example headline.</h1>--}}
                        {{--<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>--}}
                        {{--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>--}}
                    {{--</div>--}}
                </div>
            </div>

        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- /.carousel -->

    <a name="rwd" class="anchorLink"></a>
    <div class="container" name="rwd" >
        <div class="row featurette">
            <div class="col-md-7">

                <h2 class="featurette-heading">自適應網頁設計 <span class="text-muted">RWD(Responsive Web Design)</span></h2>
                <p class="lead">隨著智慧型手機、平板電腦等行動裝置日益普及，為了因應每天推陳出新的螢幕尺寸規格，自適應網頁設計 (Responsive Web Design) 也因此而產生了。

                    所謂自適應網頁，又稱為響應式網頁，就是產生出來的網頁內容，可以自動適應任何尺寸的螢幕，不管是桌上型電腦、平板電腦的寬螢幕還是手機的窄小螢幕，都可以隨著版面自動更改編排方式並且正確的顯示網頁內容，而且完全不影響閱讀的便利性。要能達到這樣的效果，當然也需要更高階的網頁技術，也就是所謂的 "液態排版 (Liquid Layout)" 。

                    與一般獨立的手機版網頁設計不同之處，透過自適應網頁技術，不論您是從桌上型電腦、筆記型電腦、平板電腦或智慧型手機來上網，都能看到相同的網頁內容，不論文字、圖片皆可完整瀏覽。</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="http://www.nitinh.com/wp-content/uploads/2013/03/what-is-responsive-web-design-700x466.png" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">
    </div>




	@yield('content')
    @yield('footer')
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
