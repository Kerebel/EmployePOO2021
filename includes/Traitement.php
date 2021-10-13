<?php

class Traitement {
    public static function instanciationUnEmploye() : void{
        $e = new employe(1, "Dupont", "Jacques", new DateTime("1980/07/12"), 1000.00);
        echo $e;
    }
    public static function instanciationUnEmployeErreur() : void{
        $e = new employe(1, "Durand", "Sylvie", new DateTime("1975/06/14"), 800.00);
        echo $e;
    }
}

