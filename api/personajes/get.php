<?php

    require_once "../db.php";

    $link = conectar();

    $sql = "SELECT id,nombre,raza,imagen FROM personajes";

    $query = mysqli_query($link, $sql);
    $lista = array();
    while($rs = mysqli_fetch_array($query)){

        $personaje = new stdClass(); // personaje = {};
        $personaje->id = $rs["id"];
        $personaje->nombre = $rs["nombre"];
        $personaje->raza = $rs["raza"];
        $personaje->imagen = $rs["imagen"];
        $lista[] = $personaje;

    }

    //notacion javascript
    echo json_encode($lista);
