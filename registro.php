<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registro</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body class="bg-dark text-white">
  
  <main class="vh-100">
  <?php require_once "navbar.php" ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registro</h1>
                <form action="procesar.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" id="contraseña" name="contraseña">
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    </main>
    
    
    <?php require_once "footer.php"?>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
