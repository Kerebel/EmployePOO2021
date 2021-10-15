<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EmployeInformaticien extends Employe{
    protected float $primeM;
    

    public function __construct(int $pnum, string $pnom, string $pprenom, DateTime $pddn, float $psalaire, Projet $objProjet, float $primeM) {
        parent::__construct($pnum, $pnom, $pprenom, $pddn, $psalaire, $objProjet);
        $this->primeM = $primeM;
    }

    function getPrimeM(): float {
        return $this->primeM;
    }
    function setPrimeM(float $primeM): void {
        $this->primeM = $primeM;
    }
    public function __toString(): string {
        return parent::__toString() . " - " . $this->primeM;
    }
}