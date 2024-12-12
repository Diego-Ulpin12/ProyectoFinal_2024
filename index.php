<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Poke Wiki</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-dark text-white">
    <main class="vh-100">
    <?php require_once "navbar.php"; ?>
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
                <p> En este proyecto, hicimos uso de la API de Pokémon 
                    para crear una wiki que proporciona información sobre el universo de los 
                    Pocket Monsters.
                </p>
            </div> 
              
          </div>


        </div>
        
         
      </section>
      
      

      
    </main>
    <?php require_once "footer.php"?>
    
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.js"></script>
  </body>

</html>
