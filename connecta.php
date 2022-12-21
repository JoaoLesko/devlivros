<?php
//Conecta com o banco de dados.
$conn = mysqli_connect("localhost", "root", "", "devlivros");
if($conn == false){
    die ("ERRO: Não conseguiu conectar no MySQL.");
}
?>