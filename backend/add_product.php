<?php
header("Content-Type: application/json");

// Configuration de la base de données
$host = 'db';
$db = 'microservice';
$user = 'root';
$pass = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Lire les données envoyées par le client
    $data = json_decode(file_get_contents("php://input"), true);

    // Vérifier si les champs 'nom' et 'prix' sont présents
    if (isset($data['nom']) && isset($data['prix'])) {
        // Préparer et exécuter la requête
        $stmt = $pdo->prepare("INSERT INTO produits (nom, prix) VALUES (:nom, :prix)");
        $stmt->execute([
            ':nom' => $data['nom'],
            ':prix' => $data['prix']
        ]);

        echo json_encode(["message" => "Produit ajouté avec succès"]);
    } else {
        echo json_encode(["error" => "Nom et prix requis"]);
    }
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>
