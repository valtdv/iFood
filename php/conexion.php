<?php
function conectar(){
    $user="root";
    $pass="1234097819";
    $server="localhost";
    $db="ifood";
    $con=mysql connect($server,$user,$pass) or die ("Error al conectar".mysql_error());
    mysql_select_db($db.$con);

    return $con;
}
?>