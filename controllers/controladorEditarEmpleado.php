<?php

     if(!isset($_SESSION)){
        session_start();
    }

    //1. Incluir el modelo de la BD
    //   Incluir el modelo Empleado
    include("../models/BaseDatos.php");
    include("../models/Empleado.php");

    if(isset($_POST["botonEditar"])){

        //Recibo los datos a editar
        $email=$_POST["email"];

        //Recibo el id
        $id=$_GET["id"];
       

        // Creo un objeto(variable) del modelo EMPLEADO
        $empleado=new Empleado(null,null,$email,null,null,null);

    
       //Ejecutar el metodo insertar registro de la bd
       $baseDatos=new BaseDatos();
       $resultado=$baseDatos->insertarRegistro($empleado->editar($id));

       //5. valido el resultado
       if($resultado){

           $_SESSION['mensaje']="exito editando registro";

           header("Location:../views/registro.php");
           

       }else{
           echo("upss... Tenemos problemas para registrar datos");
       }
        
        

    }else{
        echo("no deberias estar aquí");
    }




?>