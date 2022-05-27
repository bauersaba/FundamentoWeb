<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <?php
        include 'conexao.php';
    ?>

    <h1>Cadastro Simples</h1>
        <form method ="POST" action="adicao.php" enctype ="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome
                        <input type="text" name="nomePessoa">
                    </td>
                </tr>
                <tr>
                    <td>
                        E-mail
                        <input type="email" name="emailPessoa">
                    </td>
                </tr>
                <tr>
                    <td>
                        Idade
                        <input type="number" name="idadePessoa">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Inserir" name="sub">
                    </td>
                </tr>
            </table>
        </form>
        
    <table border='1'>
        <tr>
            <th>
                Nome
            </th>
            <th>
                E-mail
            </th>
            <th>
                Idade
            </th>
        </tr>
    <?php
    $sq="select * from pessoa";
    $qu=mysqli_query($con,$sq);
    while($r=  mysqli_fetch_assoc($qu)){
        ?>
        <tr>
            <td>
                <?php echo $r['nomePessoa']?>
            </td>
            <td>
                <?php echo $r['emailPessoa']?>
            </td>
            <td>
                <?php echo $r['idadePessoa']?>
            </td>

            <td>
                <a href="delete.php?idPessoa=<?php echo $r['idPessoa']?>">Deletar</a>
            </td>
            <td>
                <a href="edicao.php?idPessoa=<?php echo $r['idPessoa']?>">Alterar</a>
            </td>
        </tr>
    <?php
}
?>
</body>
</html>