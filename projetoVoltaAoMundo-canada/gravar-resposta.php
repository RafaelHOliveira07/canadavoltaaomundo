<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conecte-se ao seu banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "canada";

    // Crie uma conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Recupere e limpe os dados do formulário
    $resposta = filter_input(INPUT_POST, 'resposta', FILTER_SANITIZE_STRING);

    // Recupere o ID da mensagem da URL
    if (isset($_POST["id_mensagem"])) {
        $id_mensagem = $_POST["id_mensagem"];

        // Consulta SQL para inserir os dados na tabela de respostas usando declaração preparada
        $sql_resposta = "INSERT INTO tb_respostas (id_mensagem, resposta) VALUES (?, ?)";

        // Preparar a declaração SQL para a resposta
        $stmt_resposta = $conn->prepare($sql_resposta);

        if ($stmt_resposta === false) {
            die("Erro na preparação da consulta de resposta: " . $conn->error);
        }

        // Vincular os parâmetros e executar a consulta de resposta
        $stmt_resposta->bind_param("is", $id_mensagem, $resposta);

        if ($stmt_resposta->execute() === true) {
            // Consulta SQL para atualizar o status da mensagem para 'respondido'
            $sql_status = "UPDATE tb_mensagems SET status = 'respondido' WHERE id_mensagem = ?";

            // Preparar a declaração SQL para atualizar o status
            $stmt_status = $conn->prepare($sql_status);

            if ($stmt_status === false) {
                die("Erro na preparação da consulta de atualização de status: " . $conn->error);
            }

            // Vincular o parâmetro e executar a consulta de atualização de status
            $stmt_status->bind_param("i", $id_mensagem);

            if ($stmt_status->execute() === true) {
                header('Location: web/adm-index.php');
            } else {
                echo "Erro ao atualizar o status da mensagem: " . $stmt_status->error;
            }

            // Fechar a declaração de atualização de status
            $stmt_status->close();
        } else {
            echo "Erro ao inserir resposta: " . $stmt_resposta->error;
        }

        // Fechar a declaração de resposta
        $stmt_resposta->close();
    } else {
        echo "ID da mensagem não encontrado na URL.";
    }

    // Fechar a conexão
    $conn->close();
}
?>
