<?php
session_start();
if(isset($_SESSION["adminusername"])) {
    ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>easyManager - Preisoptimierung</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/favicon.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Controller Cockpit</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Amazon</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="amazonPreisoptimierung.php">Preisoptimierung</a></li>
                            <!-- <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li> -->
                            <!--<li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>-->
                            <li><i class="fa fa-share-square-o"></i><a href="#">Strategien</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="#">Kategorien</a></li> 
                            <li><i class="fa ti-export"></i><a href="#">Im- und Export</a></li>
                            <li><i class="fa fa-spinner"></i><a href="#">Bestseller</a></li>
                            <!--<li><i class="fa fa-fire"></i><a href="amazon-marketplace-login.php">Marketplace ID</a></li>-->
                            <!-- <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li> -->
                            <!-- <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li> -->
                            <!-- <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li> -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>eBay</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="#">verpacking_com</a></li>
                            <!-- <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li> -->
                            <!--<li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>-->
                            <li><i class="fa fa-share-square-o"></i><a href="#">verpackung-berlin</a></li>
                            <!-- <li><i class="fa fa-id-card-o"></i><a href="#">Kategorien</a></li> -->
                            <!-- <li><i class="fa fa-exclamation-triangle"></i><a href="#">Im- und Export</a></li> -->
                            <!-- <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li> -->
                            <!-- <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li> -->
                            <!-- <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li> -->
                            <!-- <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li> -->
                            <!-- <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li> -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Webshop</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="#">IDEALO</a></li>
                            <!-- <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li> -->
                            <!--<li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>-->
                            <li><i class="fa fa-share-square-o"></i><a href="social-media.php">Bestseller</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="products.php">Verkauf</a></li> 
                            <!-- <li><i class="fa fa-exclamation-triangle"></i><a href="warnungen.php">Bestand</a></li> -->
                            <!-- <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li> -->
                            <!-- <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li> -->
                            <!-- <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li> -->
                            <!-- <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li> -->
                            <!-- <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li> -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Rakuten</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="#">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="#">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Real</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="#">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="#">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Administration</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>User-Verwaltung</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-user"></i><a href="user.php">Benutzer</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="authority.php">Berechtigungen</a></li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li> -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>E-Commerce</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in" ></i><a  href="#" data-toggle="modal" data-target="#bestätigen">Amazon Einstellungen</a></li>

                            <!-- <li><i class="fa fa-fire"></i><a href="amazonMarketplaceLogin.php">Marketplace ID</a></li> -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Statistiken</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="#">Lagerbestand</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="#">Verkauf</a></li>
                            <!-- <li><i class="menu-icon fa fa-pie-chart"></i><a href="#"></a></li> -->
                            <!-- <li><i class="menu-icon fa fa-pie-chart"></i><a href="#">Im- und Export</a></li> -->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-sharethis"></i>Social-Media</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-facebook"></i><a href="#">Facebook</a></li>
                            <li><i class="menu-icon fa ti-twitter-alt"></i><a href="#">Twitter</a></li>
                            <li><i class="menu-icon fa ti-instagram"></i><a href="#">Instagram</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="#">Xing</a></li>
                            <li><i class="menu-icon fa ti-pinterest"></i><a href="#">Pinterest</a></li>
                        </ul>
                    </li>

                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li> -->
                    <h3 class="menu-title">Einstellungen & Übersicht</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Globale Einstellungen</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="shippingClass.php">Versandklassen</a></li>
                            
                            <!-- <li><i class="menu-icon fa fa-area-chart"></i><a href="repository.php">Lagerbestand</a></li>-->
                            <!-- <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li> -->
                            <!-- <li><i class="menu-icon fa fa-paper-plane"></i><a href="forget-password.php">Forget Pass</a></li>-->
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Globale Übersicht</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="repository.php">Lagerbestand</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="products.php">Produktübersicht</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="admin-login.php">Login</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="repository.php">Lagerbestand</a></li>
                            <!-- <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li> -->
                            
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="forget-password.php">Forget Pass</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="myProfile.php"><i class="fa fa- user"></i>Mein Profil</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Preisoptimierung</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Controller Cockpit</a></li>
                            <li><a href="#">Amazon</a></li>
                            <li class="active">Preisoptimierung</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Preisoptimierung von Amazon Artikeln</strong>
                            <button id="btnEditUser" type="button" class="btn btn-secondary mb-1" data-toggle="modal" title="Amazon aktualisieren" data-target="#mediumModalEditUser"><i id="update" class="fa fa-cloud-download"></i></button>

                        </div>
                        <div class="card-body">
                            <?php
	                            include("assets/logic/mAmazonProducts.php");
	                        ?>
                        
                    </div>
                </div>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->


                <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
                <script src="assets/js/popper.min.js"></script>
                <script src="assets/js/plugins.js"></script>
                <script src="assets/js/main.js"></script>


                <script src="assets/js/lib/data-table/datatables.min.js"></script>
                <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
                <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
                <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
                <script src="assets/js/lib/data-table/jszip.min.js"></script>
                <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
                <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
                <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
                <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
                <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
                <script src="assets/js/lib/data-table/datatables-init.js"></script>
                    
    <!-- ========================================== ANMELDEN ========================================= -->

            <div class="modal fade" id="bestätigen" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Berechtigung bestätigen</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Anmeldedaten</div>
                                    <div class="card-body card-block">
                                        <form method="post" action="../easymanager/assets/logic/mAmazonAccess.php">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                    <input type="text" id="username" name="username" placeholder="Benutzername" class="form-control" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                                                    <input type="password" id="password" name="password" placeholder="Passwort" class="form-control" required="required">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbrechen</button>
                                                <button type="submit" class="btn btn-primary">Bestätigen</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========================================== ANMELDEN ENDE ========================================= -->
                    <script type="text/javascript" src="assets/js/amazonpriceoptimizer.js"></script>

</body>
</html>
<?php

} else {
    header("Location: /easymanager/admin-login.php");
}
?>