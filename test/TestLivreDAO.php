<?php
require_once '../dao/LivreDAO.php';
require_once '../class/Livre.php';
require_once 'pdo.php';

$livreDAO = new LivreDAO($pdo);
$livres = $livreDAO->getAll();

foreach ($livres as $livre) {
    echo $livre->getIdCommande()."<br>";
    echo $livre->getEtatLivraison()."<br>";
    echo $livre->getCoutLivraison()."<br>";
    echo $livre->getDateArchive()."<br>";
    echo $livre->getIdLivreur()."<br>";
    echo "<br>";
    echo "<br>";
}

$livre = new Livre(9, "test", 1, null, 1);

$livreDAO->create($livre);

echo "Livre créé : ".$livre->getIdCommande()."<br>";

echo "<br>";

$livre = $livreDAO->getByIdCommande($livre->getIdCommande());

echo $livre->getIdCommande()."<br>";
echo $livre->getEtatLivraison()."<br>";
echo $livre->getCoutLivraison()."<br>";
echo $livre->getDateArchive()."<br>";
echo $livre->getIdLivreur()."<br>";

$livre->setEtatLivraison("test2");

$livreDAO->update($livre);

$livre = $livreDAO->getByIdCommande($livre->getIdCommande());

echo $livre->getIdCommande()."<br>";
echo $livre->getEtatLivraison()."<br>";
echo $livre->getCoutLivraison()."<br>";
echo $livre->getDateArchive()."<br>";
echo $livre->getIdLivreur()."<br>";

$livreDAO->delete($livre);