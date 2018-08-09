<?php
    $navigation_controllercockpit = [
                    "index.php" => "Dashboard" , 
                    "amazon-preisoptimierung.php" => "Preisoptimierung" , 
                    "strats.php" => "Strategien", 
                    "categories.php" => "Kategorien" , 
                    "im-export.php" => "Im- und Export", 
                    "bestseller.php" => "Bestseller" , 
                    "amazon-marketplace-login.php" => "Marketplace ID"];

    //foreach ($navigation as $nav => $titel){
        echo '<aside id="left-panel" class="left-panel">';
            echo '<nav class="navbar navbar-expand-sm navbar-default">';
                echo '<div class="navbar-header">';
                    echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">';
                        echo '<i class="fa fa-bars"></i>';
                    echo '</button>';
                    echo '<a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>';
                    echo '<a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>';
                echo '</div>';
                echo '<div id="main-menu" class="main-menu collapse navbar-collapse">';
                    echo '<ul class="nav navbar-nav">';
                        echo '<li class="active">';
                            echo '<a href="index.php" id="penispumpe"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>';
                        echo '</li>';
                    echo '<h3 class="menu-title">Controller Cockpit</h3><!-- /.menu-title -->';
                        echo '<li class="menu-item-has-children dropdown">';
                            echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Amazon</a>';
                        echo '<ul class="sub-menu children dropdown-menu">';
                            echo '<li><i class="fa fa-puzzle-piece" id="Preispotimierung"></i><a href="amazon-preisoptimierung.php">' . $titel . '</a></li>';
                            //echo '<li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>';
                            //echo '<li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>';
                            echo '<li><i class="fa fa-share-square-o"></i><a href="#">Strategien</a></li>';
                            echo '<li><i class="fa fa-id-card-o"></i><a href="#">Kategorien</a></li> ';
                            echo '<li><i class="fa ti-export"></i><a href="#">Im- und Export</a></li>';
                            echo '<li><i class="fa fa-spinner"></i><a href="#">Bestseller</a></li>';
                            echo '<li><i class="fa fa-fire"></i><a href="amazon-marketplace-login.php">Marketplace ID</a></li>';
                            //echo '<li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>';
                            //echo '<li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>';
                            //echo '<li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>';
                        echo '</ul>';
                    echo '</li>';
            // echo '<a href="$nav" class="$titel">' . $titel . '<br>';
   // }

?>