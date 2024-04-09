<?php
session_start();
$usuario = $_POST["usuario"];
$senhaLimpa = $_POST["senha"];
$senha = hash("sha256", $senhaLimpa);

$sql = "SELECT * FROM tb_usuarios WHERE usuario = :user AND senha = :passwd";

try {
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=canada', 'root', '');
    
    $resultado = $conexao->prepare($sql);
    $resultado->bindParam(':user', $usuario);
    $resultado->bindParam(':passwd', $senha);
    $resultado->execute();

    $linha = $resultado->fetch();
    $usuario_logado = $linha['usuario'];

    if ($usuario_logado == null) {
        // Usuário ou senha inválida
        header('Location: usuario-erro.php');
        exit();
    } else {
        $_SESSION['usuario_logado'] = $usuario_logado;
        header('Location: ./web/adm-index.php');
        exit();
    }
} catch (PDOException $e) {
    // Tratamento de erro ao conectar ao banco de dados ou executar a consulta
    echo "Erro: " . $e->getMessage();
    exit();
}
?>
