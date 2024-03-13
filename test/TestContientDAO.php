<?php
require_once '../dao/ContientDAO.php';
require_once '../class/Contient.php';
require_once 'pdo.php';

$contientDAO = new ContientDAO($pdo);
$contients = $contientDAO->getAll();

foreach ($contients as $contient) {
    echo $contient->getNumOf()."<br>";
    echo $contient->getQuantite()."<br>";
    echo $contient->getIdCommande()."<br>";
    echo "<br>";
    echo "<br>";
}

$contient = new Contient(1, 2, 1);

$contientDAO->create($contient);

echo "Contient créé : ".$contient->getNumOf()."<br>";

echo "<br>";

$contient = $contientDAO->getById($contient->getNumOf(), $contient->getIdCommande());

echo $contient->getNumOf()."<br>";
echo $contient->getQuantite()."<br>";
echo $contient->getIdCommande()."<br>";

$contient->setQuantite(2);

$contientDAO->update($contient);

$contient = $contientDAO->getById($contient->getNumOf(), $contient->getIdCommande());

echo $contient->getNumOf()."<br>";
echo $contient->getQuantite()."<br>";
echo $contient->getIdCommande()."<br>";

var_dump($contient);

$contientDAO->delete($contient);
