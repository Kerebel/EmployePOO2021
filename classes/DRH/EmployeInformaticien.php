<?php
namespace ClassesMetier\DRH;


use ClassesMetier\DRH\Employe;
use ClassesMetier\RD\Projet;
use DateTime;
use Exception;

class EmployeInformaticien extends Employe{
    protected float $primeM;
    protected Projet $projet;
    

    
    public function __construct(int $pnum, string $pnom, string $pprenom, DateTime $pddn, float $psalaire, Projet $objProjet) {
        parent::__construct($pnum, $pnom, $pprenom, $pddn, $psalaire, $objProjet);
        $this->primeM = 0;
        $this->projet= $objProjet;
    }

    function getPrimeM(): float {
        return $this->primeM;
    }
    function setPrimeM(float $primeM): void {
        if($primeM <= ($this->salaireM*0.3)){
            $this->primeM = $primeM;
        }
        else{
            throw new Exception("La prime mensuelle d'un informaticien ne peut excéder plus de 30% de son salaire mensuel");
        }
    }
    function getProjet(): Projet {
        return $this->projet;
    }
    public function gainAnnuel(): float {
        return $gainAnnuel = ($this->getSalaireM() + $this->getPrimeM())*12;
    }
    public function __toString(): string {
        return parent::__toString() . " - " . $this->projet;
    }
}