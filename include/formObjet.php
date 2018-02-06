<?php
session_start();
?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" style="text/css" href="../assets/css/styles.css"/>
    <link rel="stylesheet" href="../assets/css/objet.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div id="container">

    <?php include_once("header.php");?>
    <main>
        <!-- Formulaire de connexion -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form method="post" action="objet.php">
                        <div class="wrapper">
                            <form class="form-signin">
                                <h2 class="form-signin-heading">Ajouter un nouvel Objet :</h2>
                                <input type="text" class="form-control" name="title" placeholder="Titre" required=""/>
                                <div class="container">
                                    <form>
                                        <div class="form-group">
                                            <select class="form-control" id="sel1">

                                                <?php
                                                $connexion = mysqli_connect("localhost", "root", "", "ecommerce");

                                                if (!$connexion) {
                                                    die("Erreur MySQL " . mysqli_connect_errno() . " : " . mysqli_connect_error());
                                                }
                                                else
                                                {

                                                $reponse = "SELECT * FROM t_categories";
                                                $result = mysqli_query($connexion, $reponse);
                                                ?>


                                                    <?php
                                                    while ($donnees = mysqli_fetch_array($result)) {

                                                        // On met [1] dans $donnees car c'est le second choix dans notre tableau et comme on commence à partir de 0
                                                        echo " <option>" . $donnees[1] . "</option>";
                                                    }
                                                    }
                                                    ?>

                                <textarea class="description form-control" name="description" placeholder="Description de l'objet" required=""></textarea>
                                <input type="text" class="form-control" name="price" placeholder="Prix" required=""/>
                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="objectsend">Envoyez</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>

    </main>

    <?php include_once("./footer.php");?>
</div>

</body>
</html>
