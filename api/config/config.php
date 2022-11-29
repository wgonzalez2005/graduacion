<?php
session_name("Graduacion2022");
session_start();
define("RUTA", $_SERVER['REQUEST_SCHEME'] . ":/" . "/" . $_SERVER['SERVER_NAME'] . "/graduacion/api/");

define("HOST", "127.0.0.1");
define("USER", "root");
define("PASSWORD", "");
define("DB", "db_graduacion_2022");
define("CHARSET", "utf8");
define("NAMEAPP", "Graduacion2022");
define("ERROR_MODELO", "EL MODELO NO EXISTE EN LA APLICACION");
define("ERROR_CONTROLADOR", "EL CONTROLADOR NO EXISTE EN LA APLICACION");
define("ERROR_MOTODOS", "EL METODO NO EXISTE EN EL CONTROLADOR");
