<?php
// Tableau multidimensionnel pour stocker les informations des clients
$tab = array(
    array(
        'nom' => 'Alice',
        'commandes' => array('cmd1' => 150, 'cmd2' => 200, 'cmd3' => 180),
        'moyenne' => 0
    ),
    array(
        'nom' => 'Bob',
        'commandes' => array('cmd1' => 120, 'cmd2' => 170, 'cmd3' => 190),
        'moyenne' => 0
    ),
    // Ajoutez d'autres clients selon le même schéma...
);

// Fonction pour calculer la moyenne des prix des commandes d'un client et mettre à jour le tableau
function calculerMoyenne(&$client) {
    $total = array_sum($client['commandes']);
    $client['moyenne'] = $total / count($client['commandes']);
}

// Fonction pour trouver le client avec la moyenne de commande maximale
function trouverClientMaxMoyenne($tab) {
    $maxMoyenne = 0;
    $clientMaxMoyenne = null;
    foreach ($tab as $client) {
        if ($client['moyenne'] > $maxMoyenne) {
            $maxMoyenne = $client['moyenne'];
            $clientMaxMoyenne = $client['nom'];
        }
    }
    return $clientMaxMoyenne;
}

// Calculer la moyenne de chaque client
foreach ($tab as &$client) {
    calculerMoyenne($client);
}

// Trouver le client avec la moyenne de commande maximale
$clientMaxMoyenne = trouverClientMaxMoyenne($tab);

// Afficher le tableau dans un format HTML
echo "<table border='1'>";
echo "<tr><th>Nom du Client</th><th>Commandes</th><th>Moyenne des prix</th></tr>";
foreach ($tab as $client) {
    echo "<tr><td>{$client['nom']}</td><td>" . implode(", ", $client['commandes']) . "</td><td>{$client['moyenne']}</td></tr>";
}
echo "</table>";

// Afficher le client avec la moyenne de commande maximale
echo "Le client avec la moyenne de commande maximale est : $clientMaxMoyenne";
?>
