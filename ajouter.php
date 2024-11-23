<?php
require_once 'db.php'; // Inclure la connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $filiere = $_POST['filiere'];
    $annee = $_POST['annee'];
    $typeBac = $_POST['typeBac'];
    $anneeBac = $_POST['anneeBac'];

    try {
        $stmt = $pdo->prepare("
            INSERT INTO stagiaires (nom, prenom, filiere, annee, typeBac, anneeBac)
            VALUES (:nom, :prenom, :filiere, :annee, :typeBac, :anneeBac)
        ");
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':filiere' => $filiere,
            ':annee' => $annee,
            ':typeBac' => $typeBac,
            ':anneeBac' => $anneeBac,
        ]);

        echo "Stagiaire ajouté avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de l'ajout : " . $e->getMessage();
    }
}
?>
