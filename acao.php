<?
include"funPotencia.php";
include"funRaiz.php";
if (isset($_POST['ok'])) {
    
    $num = $_POST['1'];

echo"Numero inserido: $num<br>";
raiz($num);
potencia($num);
}




?>