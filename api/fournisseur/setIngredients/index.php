<?php

$body = json_decode(file_get_contents('php://input'), true);

include_once '../../../PDO/connexion.php';

var_dump($body);

if ($body['type'] === 'add') {
    $idIngredient = $body['idIngredient'];
    $newQuantity = $body['newQuantity'];

    $fetchedIngredient = getIngredient($pdo, $idIngredient);

    $sql = "UPDATE ingredient SET stockunite = :newQuantity WHERE idingredient = :idIngredient";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':newQuantity', $newQuantity);
    $stmt->bindParam(':idIngredient', $idIngredient);
    $stmt->execute();
}


function getIngredient($pdo, $idIngredient)
{
    $sql = "SELECT * FROM ingredient WHERE idingredient = :idingredient";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':idingredient', $idIngredient);
    $stmt->execute();
    $ingredient = $stmt->fetch(PDO::FETCH_ASSOC);
    return $ingredient;
}