<?php
if (file_exists("./lib/php/connect.php")) {
    // include "./lib/php/connect.php";
}
?>
<!DOCTYPE html>
<html>
    <head>  
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="lib/css/cssindex.css"/>
    </head>
    <body>
        <div id="wrap">
            <div id="header"></div>
            <div id="nav">
                <nav class="menu">              
                    <?php
                    if (file_exists("./lib/php/menu.php")) {
                        include "./lib/php/menu.php";
                    }
                    ?> 
                </nav>
            </div>
            <div id="container">
                <div id="content">
                    <?php
                    /* le contenu change en fonction de la navigation */
                    if (!isset($_SESSION['page'])) {
                        $_SESSION['page'] = "./pages/accueil.php";
                    } else {

                        if (isset($_GET['page'])) {
                            //print $_GET['page'];
                            $_SESSION['page'] = "./pages/" . $_GET['page'];
                        }
                    }

                    //print $_SESSION['page'];  
                    if (file_exists($_SESSION['page'])) {
                        include $_SESSION['page'];
                    } else {
                        print "OUPS!!!!!";
                    }
                    ?>			
                </div>
                <div id="panier">Panier</div>
                <div id="connexion">Connexion</div>
                <div id="admin">Admin</div>
                <div id="sidebar"></div>
                <div class="clear"></div>
            </div>    
            <div id="footer"><a href="mailto:adrien.spina@gmail.com">Webmaster</a></div>       
        </div>
    </body>
</html>
