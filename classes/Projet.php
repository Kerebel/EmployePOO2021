<?php

class Projet {
    protected string $codeProjet;
    protected string $nomProjet;
    protected int $dureePrevue;
    
    public function __construct(string $pcodeProjet, string $pnomProjet, int $pdureePrevue) {
        $this->codeProjet = $pcodeProjet;
        $this->nomProjet = $pnomProjet;
        $this->dureePrevue = $pdureePrevue;
    }
    public function getCodeProjet(): string {
        return $this->codeProjet;
    }
    public function getNomProjet(): string {
        return $this->nomProjet;
    }
    public function getDureePrevue(): int  {
        return $this->dureePrevue;
    }
    public function setDureePrevue(int $dureePrevue): void {
        $this->dureePrevue = $dureePrevue;
    }
    
    public function __toString(): string {
        return $this->codeProjet . " - " .$this->getNomProjet() . " - " .$this->getDureePrevue();
    }
}

