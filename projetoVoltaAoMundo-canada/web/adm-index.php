<?php



    require_once 'usuario-verifica.php';
    require_once "../classes/Mensagem.php";
    $mensagem = new Mensagem();
    $lista = $mensagem->listar();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa</title>
    <!-- Link para o Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../styles/style-table.css">
    <style>
        .admin-content {
            margin-top: 50px;
        }
    </style>
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
   

    <!-- Conteúdo da Área Administrativa -->
    <div class="container-fluid admin-content">
        <h2>Lista de perguntas </h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Mensagem</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
           
                <?php foreach ($lista as $linha):?>
                <tr>
                  
                    <td><?php echo $linha['id_mensagem']?></td>
                    <td><?php echo $linha['nome']?></td>
                    <td><?php echo $linha['email']?></td>
                    <td><?php echo $linha['assunto']?>
                    <td><?php echo $linha['mensagem']?></td>
                    <td><?php echo $linha['status']?></td>
                    <td class="act">
                    <a href="resposta.php?id_mensagem=<?php echo $linha['id_mensagem']; ?>">Responder</a>
               
             
                
                   
                       
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
