<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Irongutang | <?php echo $pageTitle ?></title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">
    
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="/template/css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/template/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/template/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/template/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/template/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/template/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/template/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/template/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/template/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/template/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/template/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/template/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/template/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/template/img/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/template/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="wrap">
    <header class="site-header">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Если гадалка сошла с ума - значит она догадалась</p>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline pull-right">

                            <li><a href="https://vk.com/id74587265" target="_blank"><i class="fa fa-vk"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="tel:+380956687731"><i class="fa fa-phone"></i> +38 095 668 77 31</a></li>
                        <?php if (User::isGuest()): ?>
                            <li><a href="/user/login" class="enter_admin">КУЛУАРЫ</a></li>
                        <?php else: ?>
                            <li><a href="/cabinet" class="enter_admin">ЛИЧНЫЙ ОТСЕК</a></li>
                            <li><a href="/user/logout" class="enter_admin">ВЫХОД</a></li>
                        <?php endif ?>
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars"></i>
				</button>
				<a href="/" class="navbar-brand">
					<img src="/template/img/logo.png" alt="Post">
				</a>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
                        <li class="active"><a href="/" title="">ОСНОВНАЯ</a></li>
                        <li><a href="/blog/bad" title="">ШО ДЕ ХУЙОВО</a></li>
                        <li><a href="/blog/good" title="">НЕХУЙОВЫЕ ДЕЛА</a></li>
                        <li class="dropdown">
                            <a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ПОНЯТИЯ <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" title="">ПРАВДА-МАТКА</a></li>
                                <li><a href="#" title="">ЕБАЛОСЬ БЫ ОНО</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery" title="">НАМЕРЕНИЕ И ВНЕШНОСТЬ</a></li>
                    </ul>                           
                </div><!-- /.navbar-collapse -->                
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>        
    </header>
    