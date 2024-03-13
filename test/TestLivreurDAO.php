<?php
require_once '../dao/LivreurDAO.php';
require_once '../class/Livreur.php';
require_once 'pdo.php';

$livreurDAO = new LivreurDAO($pdo);
$livreurs = $livreurDAO->getAll();

foreach ($livreurs as $livreur) {
    echo $livreur->getIdLivreur()."<br>";
    echo $livreur->getNom()."<br>";
    echo $livreur->getPrenom()."<br>";
    echo $livreur->getTel()."<br>";
    echo $livreur->getPassword()."<br>";
    echo $livreur->isDisponible()."<br>";
    echo "<br>";
    echo "<br>";
}

$livreur = new Livreur(1, "test", "test", "01234546789", 1, "test");

$livreurDAO->create($livreur);

echo "Livreur créé : ".$livreur->getIdLivreur()."<br>";

echo "<br>";

$livreur = $livreurDAO->getById($livreur->getIdLivreur());

echo $livreur->getIdLivreur()."<br>";
echo $livreur->getNom()."<br>";
echo $livreur->getPrenom()."<br>";
echo $livreur->getTel()."<br>";
echo $livreur->getPassword()."<br>";
echo $livreur->isDisponible()."<br>";

$livreur->setNom("test2");

$livreurDAO->update($livreur);

$livreur = $livreurDAO->getById($livreur->getIdLivreur());

echo $livreur->getIdLivreur()."<br>";
echo $livreur->getNom()."<br>";
echo $livreur->getPrenom()."<br>";
echo $livreur->getTel()."<br>";
echo $livreur->getPassword()."<br>";
echo $livreur->isDisponible()."<br>";

$livreurDAO->delete($livreur);