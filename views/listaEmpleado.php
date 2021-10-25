<?php 
    
    include("../controllers/controladorListadoEmpleado.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <header>

    </header>
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-5 g-4">
                
                <?php foreach($empleados as $empleado):?>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo($empleado["foto"]) ?>" class="card-img-top" alt="foto">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo($empleado["nombres"])?></h5>
                                <p class="card-text"><?php echo($empleado["descripcion"])?></p>
                                <a href="#" class="btn btn-primary">Eliminar</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>  
    </main>
   


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>