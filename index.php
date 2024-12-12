<!DOCTYPE html>
<!---->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Poke Wiki</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-dark text-white ">
    <main class="vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mi PokeWiki</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="registro.php">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php">Iniciar sesion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pokemones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>

      </div>
    </div>
   
    
  </nav>
      <div class="container-fluid mx-auto w-50">
        <div class="row text-center mt-5">
            <header>
              <h1>Poke Wiki</h1>
            </header>
            <section>
              
              <form action="buscador.php" method="POST" enctype="multipart/form-data">
                
                <label class="form-label">
                  <input class="form-control" type="search" name="search" id="search_bar" placeholder="Ingrese su pokemon">
                </label>
                <button class="btn btn-danger">Buscar</button>
                      
              </form>
            </section> 
        </div>
      </div>
      <section>
      <!-- Seccion informacion -->
        <div class="container-fluid mx-auto w-50">

          <div class="row text-center mt-5">

          <div class="col-6">
              <div class="card">

                  <img src="..." class="card-img-top" alt="foto de Diego Ulpin">

                  <div class="card-body">
                    <h5 class="card-title">Diego Ulpin</h5>
                  </div>

              </div>
          </div>

          <div class="col-6">
              <div class="card" >

                  <img src="..." class="card-img-top" alt="foto de Bryan Cardenas">

                  <div class="card-body">
                    <h5 class="card-title">Bryan Cardenas</h5>
                  </div>
                  
              </div>
          </div>



          </div>

            <div class="row text-center mt-5">
                <p> En este proyecto nos 
                    hicimos uso de la API de Pokemon 
                    para crear una wiki que pudiera dar informacion sobre
                    el universo de los mounstros de bolsillo
                </p>
            </div> 
              
          </div>


        </div>
        
         
      </section>
      
      

      
    </main>
    <footer class="bg-dark text-white py-2 mt-5 d-flex aling-bottom">
        <div class="container">
          <div class="row">
            <div class="col-4">
              <h5>Acerca de</h5>
              <p>Información sobre nuestra empresa.</p>
            </div>
            <div class="col-4">
              <h5>Enlaces</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="text-decoration-none">Inicio</a></li>
                <li><a href="#" class="text-decoration-none">Servicios</a></li>
                <li><a href="#" class="text-decoration-none">Contacto</a></li>
              </ul>
            </div>
            <div class="col-4">
              <h5>Contacto</h5>
              <p>Email: contacto@ejemplo.com</p>
              <p>Teléfono: +123 456 789</p>
            </div>
          </div>
        </div>
    </footer>
    
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.js"></script>
  </body>

</html>
