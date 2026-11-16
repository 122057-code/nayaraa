
<?php

require_once "conecta.php";

$sql = "SELECT id, nome, cpf FROM aluno";

try {
    $stmt = $conexao->query($sql);
    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Erro ao consultar os alunos.");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
</head>
<body>

    <h2>Alunos Cadastrados</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
        </tr>

        <?php foreach ($alunos as $aluno) { ?>
            <tr>
                <td><?= htmlspecialchars($aluno["id"]) ?></td>
                <td><?= htmlspecialchars($aluno["nome"]) ?></td>
                <td><?= htmlspecialchars($aluno["cpf"]) ?></td>
            </tr>
        <?php } ?>

    </table>

    <br>

    <a href="index.php">Voltar ao login</a>

</body>
</html>

