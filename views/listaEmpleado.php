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
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-5 g-4">
                
                <?php foreach($empleados as $empleado):?>
                    <div class="col">
                        <div class="card h-100 p-3">
                            <img src="<?php echo($empleado["foto"]) ?>" class="card-img-top h-100" alt="foto">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo($empleado["nombres"])?></h5>
                                <p class="card-text"><?php echo($empleado["descripcion"])?></p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmacion<?= $empleado["id"] ?>" ><i class="fas fa-trash-alt"></i></a>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar<?= $empleado["id"] ?>"><i class="fas fa-edit"></i></a>
                            </div>
                        </div>

                        <!-- Modal eliminar -->
                        <section>
                            <div class="modal fade" id="confirmacion<?= $empleado["id"] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title">La tiendita del horror</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>¿Estás seguro de eliminar este jugador?</p>
                                            <p><?= $empleado["id"] ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <a href="../controllers/controladorEliminarEmpleado.php?id=<?= $empleado["id"]?>" class="btn btn-danger">Aceptar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Modal editar -->
                        <section>
                            <div class="modal fade" id="editar<?= $empleado["id"] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title">La tiendita del horror</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="<?= $empleado["foto"] ?>" alt="foto" class="img-fluid w-100">
                                                </div>
                                                <div class="col-9">
                                                    <form action="../controllers/controladorEditarEmpleado.php?id=<?=$empleado["id"]?>" method="POST">
                                                        <div class="mb-3">
                                                            <label  class="form-label">Email</label>
                                                            <input name="email" type="text" class="form-control" value="<?= $empleado["email"] ?>">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary" name="botonEditar">Editar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                        

                    </div>
                <?php endforeach ?>

            </div>
        </div>  
    </main>
   

<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>