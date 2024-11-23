<?php
require 'db.php';

if ($pdo) {
    echo "Connexion réussie à la base de données !";
} else {
    echo "Erreur lors de la connexion.";
}
?>
