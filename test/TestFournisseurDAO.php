<?php
require_once '../dao/FournisseurDAO.php';
require_once '../class/Fournisseur.php';
require_once 'pdo.php';

$fournisseurDAO = new FournisseurDAO($pdo);
$fournisseurs = $fournisseurDAO->getAll();

foreach ($fournisseurs as $fournisseur) {
    echo $fournisseur->getNomFournisseur()."<br>";
    echo $fournisseur->getAdresse()."<br>";
    echo $fournisseur->getCodePostal()."<br>";
    echo $fournisseur->getVille()."<br>";
    echo $fournisseur->getTel()."<br>";
    echo $fournisseur->getDateArchive()."<br>";
    echo "<br>";
    echo "<br>";
}

$fournisseur = new Fournisseur("test", "test rue du test", "00000", "Test", "01234546789", null);

$fournisseurDAO->create($fournisseur);

echo "Fournisseur créé : ".$fournisseur->getNomFournisseur()."<br>";

echo "<br>";

$fournisseur = $fournisseurDAO->getByName($fournisseur->getNomFournisseur());

echo $fournisseur->getNomFournisseur()."<br>";
echo $fournisseur->getAdresse()."<br>";
echo $fournisseur->getCodePostal()."<br>";
echo $fournisseur->getVille()."<br>";
echo $fournisseur->getTel()."<br>";
echo $fournisseur->getDateArchive()."<br>";

$fournisseur->setAdresse("test2 rue du test");

$fournisseurDAO->update($fournisseur);

$fournisseur = $fournisseurDAO->getByName($fournisseur->getNomFournisseur());

echo $fournisseur->getNomFournisseur()."<br>";
echo $fournisseur->getAdresse()."<br>";
echo $fournisseur->getCodePostal()."<br>";
echo $fournisseur->getVille()."<br>";
echo $fournisseur->getTel()."<br>";
echo $fournisseur->getDateArchive()."<br>";

$fournisseurDAO->delete($fournisseur);