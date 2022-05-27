<?php
include 'conexao.php';


$nomePessoa=$_POST['nomePessoa'];
$emailPessoa=$_POST['emailPessoa'];
$idadePessoa=$_POST['idadePessoa'];


$sqlInsertData="insert into pessoa (nomePessoa, emailPessoa, idadePessoa) values ('$nomePessoa', '$emailPessoa', $idadePessoa);";
mysqli_query($con, $sqlInsertData);


header('location:crud_main.php');

?>