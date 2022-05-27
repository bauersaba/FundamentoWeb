<?php
include 'conexao.php';


$id = $_GET['idPessoa'];

$sql="delete from pessoa where idPessoa=$id;";
mysqli_query($con, $sql);


header('location:crud_main.php');

?>