<?php
class Livreur
{
    private $idLivreur;
    private $nom;
    private $prenom;
    private $tel;
    private $disponible;
    private $password;
    
    public function __construct($idLivreur, $nom, $prenom, $tel, $disponible, $password)
    {
        $this->idLivreur = $idLivreur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
        $this->disponible = $disponible;
        $this->password = $password;
    }

    public function getIdLivreur()
    {
        return $this->idLivreur;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function isDisponible()
    {
        return $this->disponible;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setIdLivreur($idLivreur)
    {
        $this->idLivreur = $idLivreur;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}
