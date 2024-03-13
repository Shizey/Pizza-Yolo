<?php
class Detail
{
    private $num_of;
    private $nomProd;
    private $ingBase1;
    private $ingBase2;
    private $ingBase3;
    private $ingBase4;
    private $ingOpt1;
    private $ingOpt2;
    private $ingOpt3;
    private $ingOpt4;
    private $dateArchive;
    private $idProduit;

    public function __construct($num_of, $nomProd, $ingBase1, $ingBase2, $ingBase3, $ingBase4, $ingOpt1, $ingOpt2, $ingOpt3, $ingOpt4, $dateArchive, $idProduit)
    {
        $this->num_of = $num_of;
        $this->nomProd = $nomProd;
        $this->ingBase1 = $ingBase1;
        $this->ingBase2 = $ingBase2;
        $this->ingBase3 = $ingBase3;
        $this->ingBase4 = $ingBase4;
        $this->ingOpt1 = $ingOpt1;
        $this->ingOpt2 = $ingOpt2;
        $this->ingOpt3 = $ingOpt3;
        $this->ingOpt4 = $ingOpt4;
        $this->dateArchive = $dateArchive;
        $this->idProduit = $idProduit;
    }

    public function getNumOf()
    {
        return $this->num_of;
    }

    public function getNomProd()
    {
        return $this->nomProd;
    }

    public function getIngBases()
    {
        return array($this->ingBase1, $this->ingBase2, $this->ingBase3, $this->ingBase4);
    }

    public function getIngOpts()
    {
        return array($this->ingOpt1, $this->ingOpt2, $this->ingOpt3, $this->ingOpt4);
    }

    public function getDateArchive()
    {
        return $this->dateArchive;
    }

    public function getIdProduit()
    {
        return $this->idProduit;
    }

    public function setNumOf($num_of)
    {
        $this->num_of = $num_of;
    }

    public function setNomProd($nomProd)
    {
        $this->nomProd = $nomProd;
    }

    public function setIngBases($ingBase1, $ingBase2, $ingBase3, $ingBase4)
    {
        $this->ingBase1 = $ingBase1;
        $this->ingBase2 = $ingBase2;
        $this->ingBase3 = $ingBase3;
        $this->ingBase4 = $ingBase4;
    }

    public function setIngOpts($ingOpt1, $ingOpt2, $ingOpt3, $ingOpt4)
    {
        $this->ingOpt1 = $ingOpt1;
        $this->ingOpt2 = $ingOpt2;
        $this->ingOpt3 = $ingOpt3;
        $this->ingOpt4 = $ingOpt4;
    }

    public function setDateArchive($dateArchive)
    {
        $this->dateArchiv = $dateArchive;
    }
}
