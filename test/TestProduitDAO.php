<?php
require_once '../dao/ProduitDAO.php';
require_once '../class/Produit.php';
require_once 'pdo.php';

$produitDAO = new ProduitDAO($pdo);
$produits = $produitDAO->getAll();

foreach ($produits as $produit) {
    echo $produit->getIdProduit()."<br>";
    echo $produit->getNom()."<br>";
    echo $produit->getDescription()."<br>";
    echo $produit->isActive()."<br>";
    echo $produit->getTaille()."<br>";
    echo $produit->getNbIngBase()."<br>";
    echo $produit->getNbIngOpt()."<br>";
    echo $produit->getPrix()."<br>";
    echo $produit->getImage()."<br>";
    echo $produit->getNbOptMax()."<br>";
    echo $produit->getDateArchive()."<br>";
    echo "<br>";
    echo "<br>";
}

$produit = new Produit(1, "test", "test", 1, 1, 1, 1, 1, "test", 1, null);

var_dump($produit);

$produitDAO->create($produit);

echo "Produit créé : ".$produit->getIdProduit()."<br>";

echo "<br>";

$produit = $produitDAO->getById($produit->getIdProduit());

echo $produit->getIdProduit()."<br>";
echo $produit->getNom()."<br>";
echo $produit->getDescription()."<br>";
echo $produit->isActive()."<br>";
echo $produit->getTaille()."<br>";
echo $produit->getNbIngBase()."<br>";
echo $produit->getNbIngOpt()."<br>";
echo $produit->getPrix()."<br>";
echo $produit->getImage()."<br>";
echo $produit->getNbOptMax()."<br>";
echo $produit->getDateArchive()."<br>";

$produit->setNom("test2");

$produitDAO->update($produit);

$produit = $produitDAO->getById($produit->getIdProduit());

echo $produit->getIdProduit()."<br>";
echo $produit->getNom()."<br>";
echo $produit->getDescription()."<br>";
echo $produit->isActive()."<br>";
echo $produit->getTaille()."<br>";
echo $produit->getNbIngBase()."<br>";
echo $produit->getNbIngOpt()."<br>";
echo $produit->getPrix()."<br>";
echo $produit->getImage()."<br>";
echo $produit->getNbOptMax()."<br>";
echo $produit->getDateArchive()."<br>";

$produitDAO->delete($produit);
