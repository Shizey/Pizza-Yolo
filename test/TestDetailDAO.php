<?php
require_once '../dao/DetailDAO.php';
require_once '../class/Detail.php';
require_once 'pdo.php';

$detailDAO = new DetailDAO($pdo);
$details = $detailDAO->getAll();

foreach ($details as $detail) {
    echo $detail->getIdProduit()."<br>";
    echo $detail->getIngBases()."<br>";
    echo $detail->getDateArchive()."<br>";
    echo $detail->getIngOpts()."<br>";
    echo $detail->getNomProd()."<br>";
    echo $detail->getNumOf()."<br>";
    echo "<br>";
    echo "<br>";
}

$detail = new Detail(1, "test", 1, 2, null, null, 3, 4, null, null, "2024-03-01", 1);

$detailDAO->create($detail);

echo "Detail créé : ".$detail->getNumOf()."<br>";

echo "<br>";

$detail = $detailDAO->getById($detail->getNumOf());

echo $detail->getIdProduit()."<br>";
echo $detail->getIngBases()."<br>";
echo $detail->getDateArchive()."<br>";
echo $detail->getIngOpts()."<br>";
echo $detail->getNomProd()."<br>";
echo $detail->getNumOf()."<br>";


$detail->setNomProd("test2");

$detailDAO->update($detail);

$detail = $detailDAO->getById($detail->getNumOf());

echo $detail->getIdProduit()."<br>";
echo $detail->getIngBases()."<br>";
echo $detail->getDateArchive()."<br>";
echo $detail->getIngOpts()."<br>";
echo $detail->getNomProd()."<br>";
echo $detail->getNumOf()."<br>";

$detailDAO->delete($detail);
