<?php 
    require "SessionController.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
</head>
<body>
    <table>
        <tr>
            <th>
                Nome: 
            </th>
            <td>
                <?= $_SESSION['User'].nome; ?>
            </td>
        </tr>
        <tr>
            <th>
                E-mail: 
            </th>
            <td>
                <?= $_SESSION['User'].email; ?>
            </td>
        </tr>
        <tr>
            <th>
                Senha: 
            </th>
            <td>
                <?= $_SESSION['User'].senha; ?>
            </td>
        </tr>
    </table>
</body>
</html>