<?php
// Clase para conectarnos a la Base de Datos
class Connection {
    static public function Connect () {
        // Generar la instacia para la conexión a la Base de Datos
        $link = new PDO("mysql:host=localhost;dbname=adminltemvc","root","#Fondeso*2024");
        // Asignar el formato de caracteres mediante php
        $link->exec("set names utf8mb4");
    }
}