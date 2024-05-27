<?php
$jsonFile = __DIR__ .'/data.json';

// Vérifie si le fichier JSON existe
if (file_exists($jsonFile)) {
    // Charge le contenu du fichier JSON
    $jsonData = file_get_contents($jsonFile);

    // Envoie le contenu JSON en tant que réponse
    header('Content-Type: application/json');
    echo $jsonData;
} else {
    echo 'Fichier JSON non trouvé.';
}
?>