<?php
namespace ClassesMetier\DRH;


use ClassesMetier\DRH\Employe;
use DateTime;
use Exception;
class EmployeNonInformaticien extends Employe{
    protected float $PrimeA;
    

        public function __construct(int $pnum, string $pnom, string $pprenom, DateTime $pddn, float $psalaire) {
        parent::__construct($pnum, $pnom, $pprenom, $pddn, $psalaire);
        $this->primeA = 0;
    }
    function getPrimeA(): float {
        return $this->primeA;
    }

    function setPrimeA(float $PrimeA): void {
        if($PrimeA <= $this->getSalaireM()){
        $this->primeA = $PrimeA;
        }
        else {
        $this->primeA = $this->getSalaireM();
        }
    }
    public function gainAnnuel(): float {
        return $this->getSalaireM() * 12 + $this->getPrimeA();
    }
    public function __toString(): string {
        return parent::__toString() . " - " . "<br>Prime annuelle : " . $this->primeA;
    }
}

