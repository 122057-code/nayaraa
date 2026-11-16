
<?php

include "conecta.php";

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM aluno WHERE cpf = :cpf AND senha = :senha";

try {
    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':senha', $senha);

    $stmt->execute();

    $linha = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($linha) {
        header("Location: lista.php");
        exit;
    } else {
        echo "CPF ou senha incorretos.";
    }

} catch (PDOException $e) {
    echo "Erro ao executar consulta.";
}

?>

