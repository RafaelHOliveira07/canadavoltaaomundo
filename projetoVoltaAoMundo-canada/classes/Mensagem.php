<?php

class Mensagem{

        public $id_mensagem;
        public $nome;
        public $assunto;
        public $mensagem;
        public $status;

        public function __construct($id_mensagem = false)
        {
            if($id_mensagem){
                $this->id_mensagem = $id_mensagem;
                $this->carregar();
            }
        }

    public function listar(){

        $sql = "SELECT * FROM tb_mensagems";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=canada', 'root', '');
      
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
        
    }

    public function carregar(){

        $sql = "SELECT * FROM tb_mensagems WHERE id_mensagem=" . $this->id_mensagems;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=canada', 'root', '');

    // Execução da query e armazenamento do resultado em uma variável
    $resultado = $conexao->query($sql);
    // Recuperação da primeira linha do resultado como um array associativo
    $linha = $resultado->fetch();



        $this->nome = $linha['nome'];
        $this->email = $linha['email'];
        $this->assunto = $linha['assunto'];
        $this->mensagem = $linha['mensagem'];
        $this->status = $linha['status'];
        


    }    
    public function listMessages()
    {
     

        // Consulta SQL para obter mensagens e suas respostas
        $sql = "
            SELECT 
                m.nome AS remetente,
                m.assunto,
                m.mensagem AS mensagem,
                r.resposta AS Resposta
            FROM
                tb_mensagems m
            INNER JOIN
                tb_respostas r ON m.id_mensagem = r.id_mensagem
            ORDER BY
                m.id_mensagem, r.id_mensagem;
        ";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=canada', 'root', '');
      
        $resultado = $conexao->query($sql);
        $resposta = $resultado->fetchAll();
        return $resposta;
    
        if (!empty($mensagem['Resposta'])) {
            $this->atualizarStatus($mensagem['id_mensagem'], 'respondida');
        }
        
}
        private function atualizarStatus($id_mensagem, $novoStatus)
        {
            $sql = "UPDATE tb_mensagems SET status = :status WHERE id_mensagem = :id_mensagem";
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=canada', 'root', '');
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':status', $novoStatus, PDO::PARAM_STR);
            $stmt->bindParam(':id_mensagem', $id_mensagem, PDO::PARAM_INT);
            $stmt->execute();
        }
}