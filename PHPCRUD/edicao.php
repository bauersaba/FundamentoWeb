<?php
    include 'conexao.php';


    $id = $_GET['idPessoa'];
    $sql="select * from pessoa where IdPessoa={$id}";
    $query= mysqli_query($con, $sql);
    $pessoa=mysqli_fetch_assoc($query);
?>


<h1> Usuário </h1>
        <form method="POST" action = "atualiza.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                       Id: 
                       <input readonly="readonly" type="number"  name="idPessoa" value="<?php echo $pessoa['idPessoa']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Nome: 
                        <input type="text" name="nomePessoa" value="<?php echo $pessoa['nomePessoa']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        E-mail: 
                        <input type="email" name="emailPessoa" value="<?php echo $pessoa['emailPessoa']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        Idade: 
                        <input type="number" name="idadePessoa" value="<?php echo $pessoa['idadePessoa']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="Atualizar" name="sub">
                    </td>
                </tr>


            
            </table>
        </form>