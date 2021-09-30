<?php 

    include('../models/DataBase.php');


    if(isset($_POST["boton"])){

        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $email=$_POST["email"];
        $edad=$_POST["edad"];
        $descripcion=$_POST["descripcion"];
        $fotografia=$_POST["fotografia"];

        /*echo($nombres);
        echo($apellidos);
        echo($email);
        echo($edad);
        echo($descripcion);
        echo($fotografia);*/

        $objeto=new DataBase();
        $objeto->conectarConBD();

        

    }

   


?>