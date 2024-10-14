<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD JS</title>
</head>

<body>

    <form  onsubmit="return salvarUsuario(event);">
        <label for="id_usuario">ID:</label>
        <input type="number" name="id_usuario" id="id_usuario"> <br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"> <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"> <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha"> <br>

        <input type="submit" value="Salvar Usuário">
    </form> 

    <table style="margin-top: 30px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th colspan="2">Opções</th>
            </tr>
        </thead>

        <tbody id ="usuarios">

        </tbody>
    </table>

    <script src="../js/script.js"></script>
</body>

</html> 