<?php

require 'classes/JSONDB.php'; // ESTA CLASE SE CONECTA A LA BASE DE DATOS, GUARDA USUARIO Y BUSCA POR EMAIL
require 'classes/User.php'; // ESTA CLASE CREA LOS USUARIOS CON SUS ATRIBUTOS
require 'classes/Validator.php'; // ESTA CLASE VALIDA LOS DATOS DE REGISTRO Y LOS DE LOGIN
require 'classes/Auth.php'; // ESTA CLASE ES PARA LOGIN Y LOGOUT - SESSION Y COOKIES

// CREANDO UNA INSTANCIA DE BASE DE DATOS EN JSON
$usersDb = new JSONDB("users.json");

// CREANDO UNA INSTANCIA DEL VALIDADOR DE DATOS
$validator = new Validator();

// CREANDO UNA INSTANCIA DEL LOGIN-LOGOUT
$auth = new Auth();