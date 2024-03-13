<?php
class Ingredient
{
    private $idIngredient;
    private $nomIngredient;
    private $isFrais;
    private $unite;
    private $stockMin;
    private $stockUnite;
    private $prixMoyen;
    private $quantiteACommander;

    private $dateArchive;

    public function __construct($idIngredient, $nomIngredient, $isFrais, $unite, $stockMin, $stockUnite, $prixMoyen, $quantiteACommander, $dateArchive)
    {
        $this->idIngredient = $idIngredient;
        $this->nomIngredient = $nomIngredient;
        $this->isFrais = $isFrais;
        $this->unite = $unite;
        $this->stockMin = $stockMin;
        $this->stockUnite = $stockUnite;
        $this->prixMoyen = $prixMoyen;
        $this->quantiteACommander = $quantiteACommander;
        $this->dateArchive = $dateArchive;
    }

    public function getIdIngredient()
    {
        return $this->idIngredient;
    }

    public function getNomIngredient()
    {
        return $this->nomIngredient;
    }

    public function getIsFrais()
    {
        return $this->isFrais;
    }

    public function getUnite()
    {
        return $this->unite;
    }

    public function getStockMin()
    {
        return $this->stockMin;
    }

    public function getStockUnite()
    {
        return $this->stockUnite;
    }

    public function getPrixMoyen()
    {
        return $this->prixMoyen;
    }

    public function getQuantiteACommander()
    {
        return $this->quantiteACommander;
    }

    public function getDateArchive()
    {
        return $this->dateArchive;
    }

    public function setIdIngredient($idIngredient)
    {
        $this->idIngredient = $idIngredient;
    }

    public function setNomIngredient($nomIngredient)
    {
        $this->nomIngredient = $nomIngredient;
    }

    public function setIsFrais($isFrais)
    {
        $this->isFrais = $isFrais;
    }

    public function setUnite($unite)
    {
        $this->unite = $unite;
    }

    public function setStockMin($stockMin)
    {
        $this->stockMin = $stockMin;
    }

    public function setStockUnite($stockUnite)
    {
        $this->stockUnite = $stockUnite;
    }

    public function setPrixMoyen($prixMoyen)
    {
        $this->prixMoyen = $prixMoyen;
    }

    public function setQuantiteACommander($quantiteACommander)
    {
        $this->quantiteACommander = $quantiteACommander;
    }

    public function setDateArchive($dateArchive)
    {
        $this->dateArchive = $dateArchive;
    }
}
