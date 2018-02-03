<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Lien à modifier quand il passera en ligne-->
            <a class="navbar-brand" href="http://localhost/E-commerce/index.php">E-Commerce</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">

                <?php
                if (!isset($_SESSION['login']))
                    echo ("<li><a href=\"http://localhost/E-commerce/include/formInscription.php\"><span class=\"glyphicons glyphicons-group\"></span> Inscription</a></li>");
                else
                    echo ("                <li><a href=\"http://localhost/E-commerce/include/formInscription.php\"><span class=\"glyphicon glyphicon-user\"></span> Mon compte</a></li>");
                ?>

                <?php

                if (!isset($_SESSION['login']))
                    echo ("<li><a href=\"http://localhost/E-commerce/include/formLogin.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Connexion</a></li>");
                else
                    echo ("<li><a href=\"http://localhost/E-commerce/include/logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</a></li>");
                ?>


            </ul>
        </div>
    </div>
</nav>