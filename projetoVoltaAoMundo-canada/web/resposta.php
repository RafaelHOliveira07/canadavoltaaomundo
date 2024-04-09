<?php
    require_once 'usuario-verifica.php';
    require_once "../classes/Mensagem.php";
    $mensagem = new Mensagem();
    $lista = $mensagem->listar();


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/style-form.css">
    <link rel="stylesheet" href="../styles/style-table.css">
</head>
<body>
   <!-- Barra de Navegação -->
   <nav class="navbar navbar-dark bg-dark"><div class="logo-canada"><img class="" src="../img/canada.png" alt="">  <p style="color: white;">Administração-portal canada</p></div>
       
   
      

    <div class="" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="adm-index.php">Início </a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" href="../usuario-logout.php">Sair</a>
            </li>
        </ul>
    </div>
</nav>

    <main class="container-fluid">
        
        <section class="form container">
            
            <div class="content">
                
                <h1 class="section_title"><i class="icon icon-file-text-1"></i> Responda a Pergunta selecionada</h1>
                
                <div class="box-artigo">
                    
                <div class="formularioContato">
                    
                    <form action="../gravar-resposta.php" method="post">
                    <input type="hidden" name="id_mensagem" value="<?php echo $_GET['id_mensagem']; ?>">
                        <label>
                            <span><i class="icon icon-comment"></i> Responder:</span>
                             <textarea name="resposta" rows="3" required=""></textarea> 
                        </label>
                       
                        <input type="hidden" name="acao" value="enviar" />
                      <button class="btn-envia" title="Enviar"><b class="icon icon-paper-plane-o"> Enviar</b>
                        </button></a>
                      
                    </form>
    
           
    

    
    </main>
    
    
</body>
</html>