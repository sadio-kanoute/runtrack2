<?php  
$nom = "LaPlateforme !";
function gethello($nom) {
    return "Hello $nom";
}

$message = gethello($nom);
echo $message;
?>
