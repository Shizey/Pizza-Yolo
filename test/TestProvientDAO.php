<?php
require_once '../dao/ProvientDAO.php';
require_once '../class/Provient.php';
require_once 'pdo.php';

$provientDAO = new ProvientDAO($pdo);
$provients = $provientDAO->getAll();

foreach ($provients as $provient) {
    echo $provient->getIdIngredient()."<br>";
    echo $provient->getNomFournisseur()."<br>";
    echo $provient->getPrix()."<br>";
    echo "<br>";
    echo "<br>";
}   

$provient = new Provient(1, "Fournisseur2", 5);

$provientDAO->create($provient);

echo "Provient créé : ".$provient->getIdIngredient()."<br>";

echo "<br>";

$provient = $provientDAO->getByBoth($provient->getIdIngredient(), $provient->getNomFournisseur());

echo $provient->getIdIngredient()."<br>";
echo $provient->getNomFournisseur()."<br>";
echo $provient->getPrix()."<br>";

$provient->setPrix(2);

$provientDAO->update($provient);

$provient = $provientDAO->getByBoth($provient->getIdIngredient(), $provient->getNomFournisseur());

echo $provient->getIdIngredient()."<br>";
echo $provient->getNomFournisseur()."<br>";
echo $provient->getPrix()."<br>";

$provientDAO->delete($provient);