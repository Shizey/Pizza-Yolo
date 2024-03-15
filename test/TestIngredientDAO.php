<?php
require_once '../class/Ingredient.php';
require_once 'pdo.php';

$ingredientDAO = new IngredientDAO($pdo);
$ingredients = $ingredientDAO->getAll();

foreach ($ingredients as $ingredient) {
    echo $ingredient->getIdIngredient() . "<br>";
    echo $ingredient->getNomIngredient() . "<br>";
    echo $ingredient->getStockUnite() . "<br>";
    echo $ingredient->getUnite() . "<br>";
    echo $ingredient->getDateArchive() . "<br>";
    echo $ingredient->getStockMin() . "<br>";
    echo $ingredient->getIsFrais() . "<br>";
    echo $ingredient->getPrixMoyen() . "<br>";
    echo $ingredient->getQuantiteACommander() . "<br>";
    echo "<br>";
    echo "<br>";
}

$ingredient = new Ingredient(1, "test", 1, "test", 1, 1, 1, 1, null);

$ingredientDAO->create($ingredient);

echo "Ingredient créé : " . $ingredient->getIdIngredient() . "<br>";

echo "<br>";

$ingredient = $ingredientDAO->getById($ingredient->getIdIngredient());

echo $ingredient->getIdIngredient() . "<br>";
echo $ingredient->getNomIngredient() . "<br>";
echo $ingredient->getStockUnite() . "<br>";
echo $ingredient->getUnite() . "<br>";
echo $ingredient->getDateArchive() . "<br>";
echo $ingredient->getStockMin() . "<br>";
echo $ingredient->getIsFrais() . "<br>";
echo $ingredient->getPrixMoyen() . "<br>";
echo $ingredient->getQuantiteACommander() . "<br>";

$ingredient->setNomIngredient("test2");

$ingredientDAO->update($ingredient);

$ingredient = $ingredientDAO->getById($ingredient->getIdIngredient());

echo $ingredient->getIdIngredient() . "<br>";
echo $ingredient->getNomIngredient() . "<br>";
echo $ingredient->getStockUnite() . "<br>";
echo $ingredient->getUnite() . "<br>";
echo $ingredient->getDateArchive() . "<br>";
echo $ingredient->getStockMin() . "<br>";
echo $ingredient->getIsFrais() . "<br>";
echo $ingredient->getPrixMoyen() . "<br>";
echo $ingredient->getQuantiteACommander() . "<br>";

$ingredientDAO->delete($ingredient);
