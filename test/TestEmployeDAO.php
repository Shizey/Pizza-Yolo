<?php
require_once '../dao/EmployeDAO.php';
require_once '../class/Employe.php';
require_once 'pdo.php';

$employeDAO = new EmployeDAO($pdo);
$employes = $employeDAO->getAll();

foreach ($employes as $employe) {
    echo $employe->getIdEmploye()."<br>";
    echo $employe->getNom()."<br>";
    echo $employe->getPrenom()."<br>";
    echo $employe->getTel()."<br>";
    echo $employe->getPassword()."<br>";
    echo $employe->getRole()."<br>";
    echo "<br>";
    echo "<br>";
}

$employe = new Employe(1, "test", "test", "01234546789", "test", "test");
$employeDAO->create($employe);
echo "Employe créé : ".$employe->getIdEmploye()."<br>";
echo "<br>";

var_dump($employe);

$employe = $employeDAO->getById($employe->getIdEmploye());
echo $employe->getIdEmploye()."<br>";
echo $employe->getNom()."<br>";
echo $employe->getPrenom()."<br>";
echo $employe->getTel()."<br>";
echo $employe->getPassword()."<br>";
echo $employe->getRole()."<br>";

$employe->setNom("test2");

$employeDAO->update($employe);

var_dump($employe);

$employe = $employeDAO->getById($employe->getIdEmploye());

echo $employe->getIdEmploye()."<br>";
echo $employe->getNom()."<br>";
echo $employe->getPrenom()."<br>";
echo $employe->getTel()."<br>";
echo $employe->getPassword()."<br>";
echo $employe->getRole()."<br>";

$employeDAO->delete($employe);