<?php


header('Access-Control-Allow-Origin: *');
 
$server = "localhost:3306";
$username = "root";
$password = "";
$database = "megadb";

$con = mysql_connect($server, $username, $password) or die ("No se conecto: " . mysql_error());
 
mysql_select_db($database, $con);
 
//$usu = mysql_real_escape_string($_POST["usu"]);
$usu = filter_input(INPUT_POST, 'usu', FILTER_SANITIZE_STRING);

//$pass = mysql_real_escape_string($_POST["pass"]);
$pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
 
$sql = "SELECT nombre FROM usuarios WHERE nombre='$usu' AND password='$pass'";
 
if ($resultado = mysql_query($sql, $con)){
    if (mysql_num_rows($resultado) > 0){
        echo true;
    }
}
else{
    echo false;
}
mysql_close($con);
 
 
 
 
?>