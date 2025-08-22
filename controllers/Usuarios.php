<?php

class Usuarios {
    // Función para mostrar los usuarios
    static public function getUsers() {
        // Generar la variable para almacenar el nombre de la tabla a consultar en la BBDD
        $table = "usuarios";
        // Generar la variable para almacenar la respuesta que da la BBDD
        $response = UsuariosModel::getUsuarios($table);
        // Regresa la variable $response con la información
        return $response;
    }
}