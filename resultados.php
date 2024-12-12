<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poke Wiki - Pokemones</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-dark text-white">
<main >
<?php require_once "navbar.php" ?>
<?php require_once "cargarpokemons.php"?>
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <div class="row mt-5">
                <header class="col-12 text-center">
                    <h3>Poke Wiki - Pokemones</h3>
                </header>

                
            
            <?php
                            
                            // Obtener el valor de 'start' de la URL (por defecto 1)
            if (isset($_GET['start']) && $_GET['start'] > 0) {
                $start = (int)$_GET['start'];  
            } else {
                $start = 1;  
            }

            // Obtener el valor de 'limit' de la URL (por defecto 15)
            if (isset($_GET['limit']) && $_GET['limit'] > 0) {
                $limit = (int)$_GET['limit'];  
            } else {
                $limit = 15;  // Si no esta usa 15
            }

            // Cargar los Pokémon desde el valor 'start' hasta el 'start + limit'
            for ($i = $start; $i < $start + $limit; $i++) {
                echo obtenerPokemonHTML($i);
            }

            ?>

            <!-- Botones para cargar más Pokémones -->
            <div class="col-12 text-center mt-4">
                <a href="?start=<?php echo $start + $limit; ?>&limit=15" class="btn btn-danger">Más Pokémon</a>
                <a href="?start=<?php echo $start + $limit; ?>&limit=55" class="btn btn-danger">Muchos más Pokémon</a>
            </div>
                

                
            </div>
        </div>
    </main>

    <br>
    <?php require_once "footer.php"?>
    <script src="js/bootstrap.js"></script>
</body>
</html>