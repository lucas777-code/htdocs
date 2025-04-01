<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario em JSON</title>
</head>
<body>
        <h2>Cadastro de Usuarios</h2>
        <form action="salvar.php" method="post">
            Nome: <input type="text" name="nome"
            required> <br><br>
            data: <input type="date" name="data"
            required> <br><br>
            idade: <input type="text" name="idade"
            required> <br><br>
            <button type="submit">Salvar</button>
        </form>

        <h2>Usuarios Cadastrados</h2>
        <ul>
            <?php
            $dados = json_decode(file_get_contents("dados.json"), true);

            if(!empty ($dados)) {
                foreach($dados as $usuarios) {
                    echo "<li>{$usuarios['nome']} - {$usuarios['data']} - {$usuarios['idade']} anos </li>";
                }
                } else {
                    echo "<li> nenhum usuario cadastrado ainda.</li>";
                }
            ?>
        </ul>
</body>
</html>