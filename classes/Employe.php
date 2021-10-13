<?php

class Employe {
    protected int $numero;
    protected string $nom;
    protected string $prenom;
    protected DateTime $dateDeNaissance;
    protected float $salaireM;
    
    public function __construct(int $pnum, string $pnom, string $pprenom, DateTime $pddn, float $psalaire) {
        $this->numero = $pnum;
        $this->nom = $pnom;
        $this->prenom = $pprenom;
        $this->dateDeNaissance = $pddn;
        $this->salaireM = $psalaire;
    }
    public function getNumero(): int {
        return $this->numero;
    }
    public function getNom(): string {
        return $this->nom;
    }
    public function getPrenom(): string {
        return $this->prenom;
    }
    public function getDateDeNaissance(): DateTime {
        return $this->dateDeNaissance;
    }
    function getSalaireM(): float {
        return $this->salaireM;
    }
    function setSalaireM(float $salaireM): void {
        $this->salaireM = $salaireM;
    }
}

