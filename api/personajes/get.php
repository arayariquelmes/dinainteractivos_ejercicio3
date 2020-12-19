<?php
    require_once "../db.php";
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    

    $link = conectar();

    $query = mysqli_query($link, "SELECT id,nombre,imagen,raza FROM personajes");
    $personajes = array();
    while($rs = mysqli_fetch_array($query)){
        $personaje = new stdClass();
        $personaje->id = $rs["id"];
        $personaje->nombre = $rs["nombre"];
        $personaje->imagen = $rs["imagen"];
        $personaje->raza = $rs["raza"];
        $personajes[] = $personaje;
    }

    echo json_encode($personajes);