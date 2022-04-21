<?php
    
    require_once "xampp/htdocs/CRUD/src/pages/user/read.php";
    require_once "CRUD/src/actions/user.php";
    require_once "CRUD/src/modules/messages.php";
    require_once "CRUD/pages/partials/header.php";

    $users = readUserAction($conn);

?>

<div class="container">
    <div class="row">
        <a href="../../../"><h1> Users - Read<h1></a>
        <a class="btn btn-success text-white" href="./create.php">New</a>
    </div>
    <div class="row flex-center">
        <?php if(isset($_GET['message'])) echo(printMessage($_GET['message'])); ?>
    </div>

    <table class="table-users">
        <tr>
            <th> NOME </th>
            <th> TELEFONE <th>
            <th> DATA DE NASCIMENTO </th>
            <th> EMAIL </th>
            <th> SEXO </th>
        </tr>
        <tr> 
            <td class="user_nome"><?=htmlspecialchars($row['nome'])?></td>
            <td class="user_telefone"><?=htmlspecialchars($row['email'])?></td>
            <td class="user_datanascimento"><?=htmlspecialchars($row['data de nascimento'])?></td>
            <td class="user_email"><?=htmlspecialchars($row['email'])?></td>
            <td class="user_sexo"><?=htmlspecialchars($row['sexo'])?></td>
            <td>
                <a class="btn btn-primary text-white" href="./edit.php?id=<?=$row['id']?>">Edit</a>
            </td>
            <td>
                <a class="btn btn-danger text-white" href="./delete.php?id=<?=$row['id']?>">Remove</a>
            </td>   
        </tr>
        /* aqui tinha um endforeach, porém o vs apontou erro */
    </table>
</div>
<?php require_once '../partials/footer.php'; ?>
