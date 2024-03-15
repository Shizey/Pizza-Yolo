<?php
class Employe
{
    private $idEmploye;
    private $nom;
    private $prenom;
    private $tel;
    private $password;
    private $role;

    public function __construct($idEmploye, $nom, $prenom, $tel, $password, $role)
    {
        $this->idEmploye = $idEmploye;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
        $this->password = $password;
        $this->role = $role;
    }

    public function getIdEmploye()
    {
        return $this->idEmploye;
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

    public function getPassword()
    {
        return $this->password;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setIdEmploye($idEmploye)
    {
        $this->idEmploye = $idEmploye;
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

    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    public function setRole($role)
    {
        $this->role = $role;
    }
}
