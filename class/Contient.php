<?php
class Contient
{
    private $num_of;
    private $idCommande;
    private $quantite; 
    
    public function __construct($num_of, $idCommande, $quantite)
    {
        $this->num_of = $num_of;
        $this->idCommande = $idCommande;
        $this->quantite = $quantite;
    }

    public function getNumOf()
    {
        return $this->num_of;
    }

    public function getIdCommande()
    {
        return $this->idCommande;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }

    public function setNumOf($num_of)
    {
        $this->num_of = $num_of;
    }

    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;
    }

    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }
}
