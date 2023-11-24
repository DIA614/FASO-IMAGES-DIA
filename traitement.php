<?php 
$servername = "localhost";
$username = "root";
$password = "";

try {
    $bdd = new PDO ("mysql:host=$servername;dbname=connection",$username);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}

?>
 <?php 
 if(isset($_POST['ok'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mdp = $_POST['pass'];
    $email = $_POST['email'];

    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :nom, :prenom, :email, :mdp)");
    $requete->execute(
        array(
            "nom" => $nom,
            "prenom" => $prenom,
            "email" => $email,
            "mdp" => $mdp,
            )
        );
        // $reponse = $requete->fetchALL(PDO::FETCH_ASSOC);
        // var_dump($reponse);
        // echo "Inscription reussie!";
        header("location: index2.php");
    
 }
 
 ?>