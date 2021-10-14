<?php 

    //1. Incluir el modelo de la BD
    //   Incluir el modelo Empleado
    include("../models/BaseDatos.php");
    include("../models/Empleado.php");

    //2.  Recoger los datos de la vista
    if(isset($_POST["boton"])){

        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $email=$_POST["email"];
        $edad=$_POST["edad"];
        $descripcion=$_POST["descripcion"];
        $fotografia=$_POST["fotografia"];



        //3. Creo un objeto(variable) del modelo EMPLEADO
        $empleado=new Empleado($nombres,$apellidos,$email,$edad,$descripcion,$fotografia);

    
       //4. Ejecutar el metodo insertar registro de la bd
       $baseDatos=new BaseDatos();
       $resultado=$baseDatos->insertarRegistro($empleado->registrar());

       //5. valido el resultado
       if($resultado){
           echo("exito en el registro");
       }else{
           echo("upss... Tenemos problemas para registrar datos");
       }
        
        

    }else{
        echo("no deberias estar aquí");
    }

   


?>