<?php
require_once('../conexao/conexao.php');
//Extender a propriedade de conexao
class cls_ambiente extends conexao{
//Criar variaveis
var $id;
var $garçom;

var $número_da_comanda;
var $data_hora;
var $item;
var $qtd;

//Iniciar Variaveis e outros
function __construc(){
         $this->conexao();
         $this->id = 0;
         $this->garçom = '';
         $this->número_da_comanda = 0;
         $this->data_hora= 0;
         $this->item = '';
         $this->qtd = 0;

}

function Adiciona(){

$sql = "INSERT INTO Comandas(garçom, Numero_comanda ,
Data_hora,Item,Quantidade)VALUES('".$this->garçom."',".$this->número_da_comanda.",".$this->data_hora.",".$this->item.",".$this->qtd.")";
echo $sql;

mysqli_select_db( $this->Maya,$this->database_Maya);
if(mysqli_query($this->Maya, $sql )) {
echo json_encode("Sucesso");
return true;
}
else{
echo json_encode("Falha - ".mysqli_error($this->Maya));
return false;
}
mysqli_close($this->Maya);
} ?>