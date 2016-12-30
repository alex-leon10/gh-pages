<?php

ini_set( "display_errors", true );
//date_default_timezone_set( "America/Mexico_City" );  // http://www.php.net/manual/en/timezones.php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=formulario', 'root', '');
} catch (PDOException $e){
    exit('Database Error');
}

?>