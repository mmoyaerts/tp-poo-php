#!/usr/bin/php
<?php

require_once('src/CompteBancaire.class.php');

class CompteBancaire
{
    private $titulaire;
    private $solde;
    private $devise;

    public function __construct($titulaire="", $solde="", $devise="EUR")
    {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
        $this->devise = $devise;
    }

    public function getTitulaire()
    {
        return $this->titulaire;
    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function getDevise()
    {
        return $this->devise;
    }

    public function afficher()
    {
        echo "Titulaire du compte : $this->titulaire\n";
        echo "Vous disposez de $this->solde $this->devise\n";
    }

    public function crediter($montant)
    {
        $this->solde = $this->solde + $this->montant;
    }
    public function debiter($montant)
    {
        $this->solde = $this->solde - $this->montant;
    }
}

?>
