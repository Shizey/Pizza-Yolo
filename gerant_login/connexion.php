<?php
$nom = $_POST['nom'];
$mdp = $_POST['mdp'];

$host = '192.168.213.58';
$dbname = 'PizzaYolo';
$username = 'root';
$password = 'casaos';
$dsn = "mysql:host=$host;dbname=$dbname";

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
    session_start();
    $_SESSION['loggedin'] = true;
    header("Location: http://localhost/gerant_login/dashboard.php");
} else {
    header("Location: http://localhost/gerant_login/");
}