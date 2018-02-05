<h1>Inscription</h1>
<?php
if(isset($_POST["objectsend"])) {

    // Vérification dans un tableau avec print_r très important pour nos vérifications

    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
    $tabErreur = array();

    $title = $_POST['title'];
    $description = $_POST['description'];
    $prix = $_POST['price'];

    if($_POST["title"] == "")
        array_push($tabErreur, "Veuillez saisir votre titre");

    if($_POST["description"] == "")
        array_push($tabErreur, "Veuillez saisir une description");

    if($_POST["price"] == "")
        array_push($tabErreur, "Veuillez saisir un prix");

    if(count($tabErreur) != 0) {
        $message = "<ul>";

        for($i = 0 ; $i < count($tabErreur) ; $i++) {
            $message .= "<li>" . $tabErreur[$i] . "</li>";
        }

        $message .= "</ul>";
        echo($message);

        include("./formObjet.php");
    }

    else {
        $connexion = mysqli_connect("localhost", "root", "", "ecommerce");

        if (!$connexion) {
            die("Erreur MySQL " . mysqli_connect_errno() . " : " . mysqli_connect_error());
        }

        else {
            $requete = "INSERT INTO t_articles (ID_ARTICLE, ART_TITLE, ART_CONTENU,PRICE)
                        VALUES (NULL, '$title', '$description', '$prix');";

            echo "Votre article a été ajouté !";

            mysqli_query($connexion, $requete);
            mysqli_close($connexion);
        }

    }
}

else {
    echo("Je viens d'ailleurs");
    include("./formInscription.php");
}