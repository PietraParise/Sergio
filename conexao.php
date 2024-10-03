<?php
class conexao{
var $Maya_Carregado;
var $hostname_Maya;
var $database_Maya;
var $username_Maya;
var $password_Maya;
var $Maya;
var $Recordset1;
var $link;
function __construct(){
$this->Maya_Carregado = 1;
$this->hostname_Maya = "127.0.0.1";
$this->database_Maya = "maya_nb";
$this->username_Maya = "SerosAdmin";
$this->password_Maya = "Seros@01";
$this->Maya = mysqli_connect($this->hostname_Maya, $this->username_Maya, $this-
>password_Maya,$this->database_Maya );
if (!$this->Maya) {
echo "Error: Unable to connect to MySQL." . PHP_EOL ;
echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;

exit;
}
//Estilo orientado ao objeto
$this->Maya->set_charset("utf8");
}
}
?>