<?php //scriptlet

    //Esto permite conectar a la base de datos
    function conectar(){
        $con = mysqli_connect("localhost", "root", "", "dragonball_db");
        return $con;
    }