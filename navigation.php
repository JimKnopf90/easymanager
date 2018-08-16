<?php

    $controllerCockpit = [
        "Amazon" => "Dashboard",
        "headlineControllerCockpit" => "Controller Cockpit",
        "headlineAdministration" => "Administration",
        "headlineEinstellungUndÜbersicht" => "Einstellungen & Übersicht"
    ];
    $navigation_controllercockpit = [
        "index.php" => "Dashboard" , 
        "amazon-preisoptimierung.php" => "Preisoptimierung" , 
        "strats.php" => "Strategien", 
        "categories.php" => "Kategorien" , 
        "im-export.php" => "Im- und Export", 
        "bestseller.php" => "Bestseller" , 
        "amazon-marketplace-login.php" => "Marketplace ID"
    ];

foreach($controller_headline as $headline => $headline_name){
    echo "<h3 class='menu-title'>$headline_name</h3>";
foreach($navigation_controllercockpit as $link => $bezeichnung){
    echo "<li class='menu-item-has-children dropdown>";
        echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='menu-icon fa fa-laptop'></i>$bezeichnung</a>";
            echo "<ul class='sub-menu children dropdown-menu'>";
        echo "<li>";
    echo '<i class="fa fa-puzzle-piece"></i>';
    echo '<a href="#">IDEALO</a>';
    echo '</li>' ;   
    echo '</ul>';
    echo '</li>';
}
    
}
