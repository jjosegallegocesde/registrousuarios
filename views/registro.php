<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La tiendita del horror</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">

   <header class="d-none d-md-block">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="menu">
        <div class="container-fluid text-white">
            La tiendita
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 border-start ms-2">

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../index.php">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="registro.php">Registrar Usuarios</a>
              </li>

             

            </ul>

          </div>

        </div>
      </nav>
     

    </header>
    <main>

        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-5">

                    <form action="../controllers/controladorUsuario.php" method="POST">
                        <h3>Registro de empleados</h3>
                        <div class="mb-3 mt-5">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombres">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Edad</label>
                            <input type="number" class="form-control" name="edad">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descripcion</label>
                            <textarea class="form-control" placeholder="Leave a comment here" name="descripcion"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Fotografia</label>
                            <input type="text" class="form-control" name="fotografia">
                        </div>

                        <button type="submit" class="btn btn-primary" name="boton">registrar</button>
            
                    </form>

                </div>
                <div class="col-12 col-md-4 align-self-end">
                    <img src="../public/img/empleados.png" alt="imagen" class="w-100 img-fluid">
                </div>
            </div>
        </div>

       

    </main>

    <section>
      <?php ?>
        <div class="modal fade" id="modal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">La tiendita del horror</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <h5>PRUEBA</h5>
              </div>
            </div>
          </div>
        </div>
      <?php ?>
    </section>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>