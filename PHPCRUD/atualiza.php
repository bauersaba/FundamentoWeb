<?php
include 'conexao.php';

$id = $_POST['idPessoa'];
$nomePessoa=$_POST['nomePessoa'];
$emailPessoa=$_POST['emailPessoa'];
$idadePessoa=$_POST['idadePessoa'];

$sqlUpdateData="update pessoa set 
                nomePessoa = '$nomePessoa',
                emailPessoa = '$emailPessoa',
                idadePessoa =$idadePessoa
                where idPessoa = {$id}";
mysqli_query($con, $sqlUpdateData);
header('location:crud_main.php');

?>