<h1>Inscription</h1>
<?php
if(isset($_POST["formulaire"])) {

    // Vérification dans un tableau avec print_r très important pour nos vérifications

    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
    $tabErreur = array();

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $mail = $_POST['mail'];
    $mdp = $_POST['password'];

    if($_POST["nom"] == "")
        array_push($tabErreur, "Veuillez saisir votre nom");

    if($_POST["prenom"] == "")
        array_push($tabErreur, "Veuillez saisir votre prénom");

    if($_POST["pseudo"] == "")
        array_push($tabErreur, "Veuillez saisir un pseudonyme");

    if($_POST["mail"] == "")
        array_push($tabErreur, "Veuillez saisir votre e-mail");

    if($_POST["password"] == "")
        array_push($tabErreur, "Veuillez saisir un mot de passe");

    if(count($tabErreur) != 0) {
        $message = "<ul>";

        for($i = 0 ; $i < count($tabErreur) ; $i++) {
            $message .= "<li>" . $tabErreur[$i] . "</li>";
        }

        $message .= "</ul>";
        echo($message);

        include("./formInscription.php");
    }

    else {
        $connexion = mysqli_connect("localhost", "root", "", "ecommerce");

        if (!$connexion) {
            die("Erreur MySQL " . mysqli_connect_errno() . " : " . mysqli_connect_error());
        }

        else {
            $mdp = sha1($_POST['password']);
            $requete = "INSERT INTO login (ID, NOM, PRENOM,PSEUDO,
                        MAIL, MDP)
                        VALUES (NULL, '$nom', '$prenom', '$pseudo', '$mail', '$mdp');";

            echo "Votre compte a été crée !";

            mysqli_query($connexion, $requete);
            mysqli_close($connexion);
        }

    }
}

else {
    echo("Je viens d'ailleurs");
    include("./formInscription.php");
}