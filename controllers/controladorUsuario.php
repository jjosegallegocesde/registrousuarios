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

        //acceder a los metodos de Empleado
        echo($empleado->registrar());


        

        //3. Utilizar la clase BD 
        //Para utilizar una clase hay que sacarle copia
        //para utilizar una clase hay que crear un objeto
        //para utilizar una clase hay que crear una instancia

        //UN OBJETO ES UNA VARIABLE
        //$baseDatos=new BaseDatos();
        //$baseDatos->conectarConBD();

        
        

    }else{
        echo("no deberias estar aquí");
    }

   


?>