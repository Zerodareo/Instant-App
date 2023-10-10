<?php
include 'connexion.php';

if(isset($_POST["submit"])) {
    $photos= $_POST["photos"];

$requete = $db->prepare("INSERT INTO photos(nom_file, image_type)");
$stmt->bindParam(1, $nom_file);
$stmt->bindParam(2, $image_type);
}
?>