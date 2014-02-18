<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Conute | Connect, Carpool, Conmmute </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/headers/header1.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="shortcut icon" href="favicon.ico">        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="assets/plugins/bxslider/jquery.bxslider.css">             
    <link rel="stylesheet" href="assets/plugins/horizontal-parallax/css/horizontal-parallax.css">
    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="assets/css/pages/page_promo.css">
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/blue.css" id="style_color">

    <!-- files not included in download for some reason...
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="assets/css/themes/headers/default.css" id="style_color-header-1">    
    -->

</head> 

<body>
<!--=== Style Switcher ===-->    
<!--
<i class="style-switcher-btn icon-cogs hidden-xs"></i>
<div class="style-switcher">
    <div class="theme-close"><i class="icon-remove"></i></div>
    <div class="theme-heading">Theme Colors</div>
    <ul class="list-unstyled">
        <li class="theme-default theme-active" data-style="default" data-header="light"></li>
        <li class="theme-blue" data-style="blue" data-header="light"></li>
        <li class="theme-orange" data-style="orange" data-header="light"></li>
        <li class="theme-red" data-style="red" data-header="light"></li>
        <li class="theme-light last" data-style="light" data-header="light"></li>
    </ul>
    <div style="margin-bottom:18px;"></div>
    <div class="theme-heading">Layouts</div>
    <div class="text-center">
        <a href="#" class="btn-u btn-u-green btn-block active-switcher-btn wide-layout-btn">Wide</a>
        <a href="#" class="btn-u btn-u-green btn-block boxed-layout-btn">Boxed</a>
    </div>
</div>
-->
<!--/style-switcher-->
<!--=== End Style Switcher ===-->    

<!--=== Top ===-->    
<div class="top">
    <div class="container">         
        <ul class="loginbar pull-right">
            <li>
                (401) 787-3483
            </li>
            <li class="devider"></li>   
            <li><a href="contact.php">Contact</a></li>  
        </ul>
    </div>      
</div><!--/top-->
<!--=== End Top ===-->    

<!--=== Header ===-->    
<div class="header">
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img id="logo-header" src="assets/img/logo1-default.png" alt="Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown <?php if ( $nav == 0 ) { echo "active"; } ?>">
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="dropdown <?php if ( $nav == 1 ) { echo "active"; } ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Our Services
                            <i class="icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="what-we-do.php">What We Do</a></li>
                         <!--   <li><a href="our-process.php">Our Process</a></li>-->
                        </ul>
                    </li>
                  <!--  <li class="dropdown <?php if ( $nav == 2 ) { echo "active"; } ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Our Team
                            <i class="icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="team.php">Our Team</a></li>
                            <li><a href="jeff.php">Jeff Moncrieff</a></li>
                        </ul>
                    </li>-->
                    <li class="dropdown <?php if ( $nav == 3 ) { echo "active"; } ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Our Record
                            <i class="icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                        <!--     <li><a href="#">Placeholder</a></li>-->
                        </ul>
                    </li>
                    <li class="dropdown <?php if ( $nav == 4 ) { echo "active"; } ?>">
                        <a href="contact.php">
                            Contact Us
                        </a>
                    </li>
                    <li class="hidden-sm"><a class="search"><i class="icon-search search-btn"></i></a></li>
                </ul>
                <div class="search-open">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn-u" type="button">Go</button>
                        </span>
                    </div><!-- /input-group -->
                </div>                
            </div><!-- /navbar-collapse -->
        </div>    
    </div>    
</div><!--/header-->
<!--=== End Header ===-->    
