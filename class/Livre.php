<?php
class Livre
{
    private $idCommande;
    private $etatLivraison;
    private $coutLivraison;
    private $dateArchiv;
    private $idLivreur;

    public function __construct($idCommande, $etatLivraison, $coutLivraison, $dateArchiv, $idLivreur)
    {
        $this->idCommande = $idCommande;
        $this->etatLivraison = $etatLivraison;
        $this->coutLivraison = $coutLivraison;
        $this->dateArchiv = $dateArchiv;
        $this->idLivreur = $idLivreur;
    }

    public function getIdCommande()
    {
        return $this->idCommande;
    }

    public function getEtatLivraison()
    {
        return $this->etatLivraison;
    }

    public function getCoutLivraison()
    {
        return $this->coutLivraison;
    }

    public function getDateArchive()
    {
        return $this->dateArchiv;
    }

    public function getIdLivreur()
    {
        return $this->idLivreur;
    }

    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;
    }

    public function setEtatLivraison($etatLivraison)
    {
        $this->etatLivraison = $etatLivraison;
    }

    public function setCoutLivraison($coutLivraison)
    {
        $this->coutLivraison = $coutLivraison;
    }

    public function setDateArchive($dateArchiv)
    {
        $this->dateArchiv = $dateArchiv;
    }

    public function setIdLivreur($idLivreur)
    {
        $this->idLivreur = $idLivreur;
    }
}
