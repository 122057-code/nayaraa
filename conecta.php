
<?php

$host = "sql303.infinityfree.com";
$banco = "if0_43449524_banquinho";
$usuario = "if0_43449524";
$senha = "3GjXCT2AI8OaN";

try {
    $conexao = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Conexão realizada com sucesso!";

} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
