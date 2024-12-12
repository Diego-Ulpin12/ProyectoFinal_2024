<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Inicio de sesión</title>

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body class="bg-dark text-white">
    <?php require_once "header.php" ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Inicio de sesion</h1>
                <form action="proc_log.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" id="contraseña" name="contraseña">
                    </div>

                    <button type="submit" class="btn btn-primary">Iniciar sesion</button>
                </form>
            </div>
        </div>
    </div>
   
    <script src="js/bootstrap.js"></script>
  </body>
</html>
