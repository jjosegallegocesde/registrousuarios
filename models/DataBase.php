<?php 


    class DataBase {

        //ATRIBUTOS
        public $usuarioBD="root";
        public $passwordBD="";
        public $servidorBD="mysql:host=localhost;";
        public $nombreBD="dbname=tiendabello";

         public function __construct(){}

        //Registrar datos
        public function conectarConBD(){

            try{

                $datosGeneralesBD=$this->servidorBD.$this->nombreBD;
                $conexion= new PDO($datosGeneralesBD,$this->usuarioBD,$this->passwordBD);
                echo("conectados con exito a BD");
                //return($conexion);

            }catch(PDOException $error){
                
                die("upss. ".$error->getMessage( ));

            }

            

        }
        
    }


?>