<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
</head>
<body>
    <form action="Controller/AutenticarController.php" method="post">
        <table>
            <tr>
                <th>
                    E-mail
                </th>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <th>
                    Senha
                </th>
                <td>
                    <input type="password" name="senha">
                </td>
            </tr>
        </table>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>