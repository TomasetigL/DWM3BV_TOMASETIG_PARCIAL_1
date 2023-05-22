<?php

function obtenerCatalogo() {
    $content = file_get_contents('data/info.json');
    $data = json_decode($content, true);
    return $data['productos'];
}

function filtrarPorPlataforma($productos) {
    $productos_filtrados = [];
    foreach ($productos as $producto) {
        
            $productos_filtrados[] = $producto;
        
    }
    return $productos_filtrados;
}


function obtenerConsolas() {
    $content = file_get_contents('data/info.json');
    $data = json_decode($content, true);
    return $data['consolas'];
}


function filtrarPorConsola($consolas) {
    $consolas_filtrados = [];
    foreach ($consolas as $consola) {
        
            $consolas_filtrados[] = $consola;
        
    }
    return $consolas_filtrados;
}


?>


