<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'classes/Employe.php';
        include 'classes/Projet.php';
        include 'classes/EmployeInformaticien.php';
        include 'classes/EmployeNonInformaticien.php';
        include 'includes/Traitement.php';
        
        try{
//            Traitement::instanciationUnEmploye();
//             Traitement::instanciationUnEmployeErreur();
//             Traitement::instanciationUnEmploye();
//            Traitement::instanciationProjetV1();
//            Traitement::instanciationEmployeInformaticienV1();
//            Traitement::instanciationEmployeInformaticienV2();
//            Traitement::instanciationEmployeNonInformaticienV1();
            Traitement::instanciationEmployeNonInformaticienV2();
            
        } catch (Exception $ex) {
              echo $ex->getMessage();
        }
        ?>
    </body>
</html>
