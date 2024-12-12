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
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                   
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Confirmar Contraseña</label>
                        <input type="text" class="form-control" id="passwordConfirm" name="passwordConfirm" required>
                    </div>
 
                    <button type="submit" class="btn btn-danger">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    </main>
    
    
    <?php require_once "footer.php"?>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
