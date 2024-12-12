<?php
function obtenerPokemonHTML($pokemonId) {
    // Sacar datos de la api
    $url = "https://pokeapi.co/api/v2/pokemon/{$pokemonId}";

    // Verificar si la solicitud fue exitosa
    $response = file_get_contents($url);
    if ($response === false) {
        return "Error al obtener los datos del Pokémon.";
    }

    // Decodificar la respuesta JSON
    $data = json_decode($response, true);


    if (!isset($data['name'], $data['types'])) {
        return "Datos del Pokémon no encontrados.";
    }


   $data['name'][0] = strtoupper($data['name'][0]);//  primera letra a mayus

   $nombre = $data['name'];

  // Extraer los nombres de los tipos
    $tiposArray = array_column($data['types'],'type.name');


    foreach ($data['types'] as $tipo) {
    
        $nombreTipo = $tipo['type']['name'];
        $nombreTipo[0] = strtoupper($nombreTipo[0]);  //  primera letra a mayus
    
        $tiposArray[] = $nombreTipo;
    }
    
    // Unir los tipos con una barra '/'
    $tipos = join('/', $tiposArray);
     

    // Obtener la imagen del Pokémon
    $imagen = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{$pokemonId}.png";

    // Generar el HTML del Pokémon
    return "
    <div class='col-md-4 mb-3'>
        <div class='card bg-secondary text-white'>
            <img src='{$imagen}' class='card-img-top' alt='{$nombre}'>
            <div class='card-body'>
                <h5 class='card-title'>{$nombre}</h5>
                <p class='card-text'>Tipo: {$tipos}</p>
                <a href='detallespokemon.php?id={$pokemonId}' class='btn btn-danger'>Ver detalles</a>
            </div>
        </div>
    </div>";
}
?>
