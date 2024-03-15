<?php

include_once __DIR__ . '/../../PDO/connexion.php';
require_once __DIR__ . '/../../dao/FournisseurDAO.php';
require_once __DIR__ . '/../../dao/IngredientDAO.php';
require_once __DIR__ . '/../../dao/ProvientDAO.php';

$fournisseursDAO = new FournisseurDAO($pdo);
$ingredientsDAO = new IngredientDAO($pdo);
$provientsDAO = new ProvientDAO($pdo);

$fournisseurs = $fournisseursDAO->getAll();
$ingredients = $ingredientsDAO->getAll();
$provients = $provientsDAO->getAll();

$data = [];

foreach ($fournisseurs as $fournisseur) {
    $data[] = [
        'idFournisseur' => $fournisseur->getAdresse(),
        'nomFournisseur' => $fournisseur->getNomFournisseur(),
        'adresse' => $fournisseur->getAdresse(),
        'ville' => $fournisseur->getVille(),
        'codePostal' => $fournisseur->getCodePostal(),
        'telephone' => $fournisseur->getTel(),
        'ingredients' => [],
    ];

    foreach ($provients as $provient) {
        if ($provient->getNomFournisseur() == $fournisseur->getNomFournisseur()) {
            foreach ($ingredients as $ingredient) {
                if ($ingredient->getIdIngredient() == $provient->getIdIngredient()) {
                    $data[count($data) - 1]['ingredients'][] = [
                        'idIngredient' => $ingredient->getIdIngredient(),
                        'nomIngredient' => $ingredient->getNomIngredient(),
                        'stockUnite' => $ingredient->getStockUnite(),
                        'unite' => $ingredient->getUnite(),
                        'dateArchive' => $ingredient->getDateArchive(),
                        'stockMin' => $ingredient->getStockMin(),
                        'isFrais' => $ingredient->getIsFrais(),
                        'prixMoyen' => $ingredient->getPrixMoyen(),
                        'quantiteACommander' => $ingredient->getQuantiteACommander(),
                    ];
                }
            }
        }
    }
}

echo json_encode($data);