<?php
include_once __DIR__ . '/../../../PDO/connexion.php';
require_once __DIR__ . '/../../../dao/IngredientDAO.php';

$body = json_decode(file_get_contents('php://input'), true);


$ingredientsDAO = new IngredientDAO($pdo);

if ($body['type'] === 'add') {
    $idIngredient = $body['idIngredient'];
    $newQuantity = $body['newQuantity'];

    $fetchedIngredient = $ingredientsDAO->getById($idIngredient);

    $fetchedIngredient->setStockUnite($newQuantity);

    $ingredientsDAO->update($fetchedIngredient);
}