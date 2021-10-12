<?php 

    class BaseDatos {

        //ATRIBUTOS=VARIABLES=DATOS
        public $usuario="root";
        public $passwordBD="";
        public $servidorBD="mysql:host=localhost;";
        public $nombreBD="dbname=tiendabello";
        

        //METODO ESPECIAL CONSTRUCTOR
        public function __construct(){}

        //METODOS=ACCIONES=FUNCIONES
        public function conectarConBD(){

            //MANEJO DE ERRORES
            try{

                $datosGeneralesBD=$this->servidorBD.$this->nombreBD;
                $conexion= new PDO($datosGeneralesBD,$this->usuario,$this->passwordBD);
                echo("exito conectandonos a la bd");

            }catch(PDOException $error){

                die("Tenemos un problema ".$error->getMessage());

            }

        }


        
    }





?>