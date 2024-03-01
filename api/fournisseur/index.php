<?php

include_once '../../PDO/connexion.php';

$fournisseurs = getFournisseurs($pdo);
$ingredients = getIngredients($pdo);
$provients = getProvient($pdo);

$data = [];

foreach ($fournisseurs as $fournisseur) {
    $fournisseur['ingredients'] = [];
    foreach ($provients as $provient) {
        if ($provient['nomfourn'] === $fournisseur['nomfourn']) {
            $ingredient = $ingredients[array_search($provient['idingredient'], array_column($ingredients, 'idingredient'))];

            $ingredient["prixuht"] = $provient["prixuht"];

            $fournisseur['ingredients'][] = $ingredient;
        }
    }

    $data[] = $fournisseur;
}

echo json_encode($data);


function getFournisseurs($pdo)
{
    $sql = "SELECT * FROM fournisseur";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $fournisseurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $fournisseurs;
}

function getIngredients($pdo)
{
    require '../../PDO/connexion.php';
    $sql = "SELECT * FROM ingredient";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $ingredients = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $ingredients;
}

function getProvient($pdo)
{
    require '../../PDO/connexion.php';
    $sql = "SELECT * FROM provient";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $provient = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $provient;
}