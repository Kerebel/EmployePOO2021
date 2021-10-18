<?php

use App\Includes\Traitement;

include__DIR__ . "/vendor/autoload.php";

try {
//            Traitement::instanciationUnEmploye();
//             Traitement::instanciationUnEmployeErreur();
//             Traitement::instanciationUnEmploye();
//            Traitement::instanciationProjetV1();
//            Traitement::instanciationEmployeInformaticienV1();
//            Traitement::instanciationEmployeInformaticienV2();
//            Traitement::instanciationEmployeNonInformaticienV1();
    Traitement::testGainAnnuel();
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
