<?php
require_once '../dao/ComporteDAO.php';
require_once '../class/Comporte.php';
require_once 'pdo.php';

$comporteDAO = new ComporteDAO($pdo);
$comportes = $comporteDAO->getAll();

foreach ($comportes as $comporte) {
    echo $comporte->getIdIngredient()."<br>";
    echo $comporte->getIdProduit()."<br>";
    echo $comporte->getQuantite()."<br>";
    echo $comporte->getType()."<br>";
    echo "<br>";
    echo "<br>";
}

$comporte = new Comporte(1, 1, 1, "test");

$comporteDAO->create($comporte);

echo "Comporte créé : ".$comporte->getIdIngredient()."<br>";

echo "<br>";

$comporte = $comporteDAO->getById($comporte->getIdIngredient(), $comporte->getIdProduit());

echo $comporte->getIdIngredient()."<br>";
echo $comporte->getIdProduit()."<br>";
echo $comporte->getQuantite()."<br>";
echo $comporte->getType()."<br>";

$comporte->setQuantite(2);

$comporteDAO->update($comporte);

$comporte = $comporteDAO->getById($comporte->getIdIngredient(), $comporte->getIdProduit());

echo $comporte->getIdIngredient()."<br>";
echo $comporte->getIdProduit()."<br>";
echo $comporte->getQuantite()."<br>";
echo $comporte->getType()."<br>";

$comporteDAO->delete($comporte);
