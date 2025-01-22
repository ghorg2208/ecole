<?php
$host = 'db';
$db = 'microservice';
$user = 'root';
$pass = 'password';

$retryCount = 5;

while ($retryCount > 0) {
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion réussie à la base de données.";
        break;
    } catch (PDOException $e) {
        $retryCount--;
        if ($retryCount == 0) {
            echo json_encode(["error" => $e->getMessage()]);
            exit();
        }
        sleep(2); // Attendre 2 secondes avant de réessayer
    }
}
?>
