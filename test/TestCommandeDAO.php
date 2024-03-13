<?php
require_once '../dao/CommandeDAO.php';
require_once '../class/Commande.php';
require_once 'pdo.php';

$commandeDAO = new CommandeDAO($pdo);
$commandes = $commandeDAO->getAll();

foreach ($commandes as $commande) {
    echo $commande->getIdCommande()."<br>";
    echo $commande->getDateCommande()."<br>";
    echo $commande->getAdresse()."<br>";
    echo $commande->getCodePostal()."<br>";
    echo $commande->getVille()."<br>";
    echo $commande->getDateArchiv()."<br>";
    echo $commande->getEtatCommande()."<br>";
    echo $commande->getNom()."<br>";
    echo $commande->getTelephone()."<br>";
    echo $commande->getTypeEmbal()."<br>";
    echo "<br>";
    echo "<br>";
}

$commande = new Commande(1, "test", "01234546789", "test rue du test", "00000", "Test", "2024-03-01", "en cours de livraison", "carton", null);

$commandeDAO->create($commande);

echo "Commande créée : ".$commande->getIdCommande()."<br>";
echo "<br>";
echo "<br>";

$commande = $commandeDAO->getById(9);
echo $commande->getIdCommande()."<br>";
echo $commande->getDateCommande()."<br>";
echo $commande->getAdresse()."<br>";
echo $commande->getCodePostal()."<br>";
echo $commande->getVille()."<br>";
echo $commande->getDateArchiv()."<br>";
echo $commande->getEtatCommande()."<br>";
echo $commande->getNom()."<br>";
echo $commande->getTelephone()."<br>";
echo $commande->getTypeEmbal()."<br>";


$commande->setAdresse("test2 rue du test");

$commandeDAO->update($commande);

$commande = $commandeDAO->getById(9);
echo $commande->getIdCommande()."<br>";
echo $commande->getDateCommande()."<br>";
echo $commande->getAdresse()."<br>";
echo $commande->getCodePostal()."<br>";
echo $commande->getVille()."<br>";
echo $commande->getDateArchiv()."<br>";
echo $commande->getEtatCommande()."<br>";
echo $commande->getNom()."<br>";
echo $commande->getTelephone()."<br>";
echo $commande->getTypeEmbal()."<br>";

$commandeDAO->delete($commande);