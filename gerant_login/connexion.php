<?php
$nom = $_POST['nom'];
$mdp = $_POST['mdp'];

$host = "localhost";
$dbname = "root";
$username = "root";
$password = "cacaos";
$dns = "mysql:host=$host;dbname";

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("select nom, password, role from employe where role = 'gerant'");
    $stmt->execute();
    $result = $stmt->fetch();
    #echo var_dump($result);
    
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
$conn = null;

if ($result['password'] == hash('sha256', 'admin') and $result['nom'] == $nom) {
    header("Location: http://localhost/pizza/dashboard.php");
} else {
    echo "Login ou mot de passe érronée";
}