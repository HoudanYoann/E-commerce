<h1>Inscription</h1>
<?php
if(isset($_POST["categorysend"])) {

    // Vérification dans un tableau avec print_r très important pour nos vérifications

    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
    $tabErreur = array();

    $title = $_POST['title'];


    if($_POST["title"] == "")
        array_push($tabErreur, "Veuillez saisir un Titre");

    if(count($tabErreur) != 0) {
        $message = "<ul>";

        for($i = 0 ; $i < count($tabErreur) ; $i++) {
            $message .= "<li>" . $tabErreur[$i] . "</li>";
        }

        $message .= "</ul>";
        echo($message);

        include("./formCategory.php");
    }

    else {
        $connexion = mysqli_connect("localhost", "root", "", "ecommerce");

        if (!$connexion) {
            die("Erreur MySQL " . mysqli_connect_errno() . " : " . mysqli_connect_error());
        }

        else {
            $requete = "INSERT INTO t_categories (ID_CATEGORIE, TITLE_CATEGORIE)
                        VALUES (NULL, '$title');";

            echo "Votre catégorie a été ajoutée !";

            mysqli_query($connexion, $requete);
            mysqli_close($connexion);
        }

    }
}

else {
    echo("Je viens d'ailleurs");
    include("./formCategory.php");
}