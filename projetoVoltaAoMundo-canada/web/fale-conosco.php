<?php
    require_once "../classes/Mensagem.php";
    $mensagem = new Mensagem();
    $resposta = $mensagem->listMessages();
?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal-Canada</title>
  <link rel="shortcut icon" href="img/canada.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" href="../styles/style.css">
  <link rel="stylesheet" href="../styles/style-form.css">
  <link rel="stylesheet" href="../styles/style-2.css">

</head>

<body>


  <header>

    <div class="logo-canada">
      <img src="../img/canada.png" alt="">
      <span></span>
      <h1> <a href="index.html">PORTAL <br> CANADA</a> </h1>
    </div>

    <nav class="navbar navbar-expand-lg main-nav px-0">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu"
        aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">

        <span class="burg" id="d1"></span>
        <span class="burg" id="d2"></span>
        <span class="burg" id="d3"></span>

      </button>

      <div class="collapse navbar-collapse" id="mainMenu">
        <ul class="navbar-nav ml-auto text-uppercase f1">
        <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="historia.html">História</a>
          </li>
          <li>
            <a href="culinaria.html">Culinária</a>
          </li>
          <li>
            <a href="turismo.html">Turismo</a>
          </li>
          <li>
            <a href="curiosidades.html">Curiosidades</a>
          </li>
          <li>
            <a href="fale-conosco.php">Fale-conosco</a>
          </li>

        </ul>
      </div>
    </nav>
    </div>

  </header>





  <main class="container-fluid">
        
    <section class="form container">
        
        <div class="content">
            
            <h1 class="section_title"><i class="icon icon-file-text-1"></i> Fale Conosco</h1>
            
            <div class="box-artigo">
                
            <div class="formularioContato">
                
                <form action="../gravar-mensagem.php" method="post" enctype="multipart/form-data">

                    <label>
                        <span><i class="icon icon-user-1"></i> Nome</span>
                        <input type="text" name="nome" required="">
                    </label>
                    
                    <label>
                        <span><i class="icon icon-email"></i> E-mail</span>
                        <input type="text" name="email" class="fade_8S">
                    </label>

                    <label>
                        <span><i class="icon icon-flag"></i> Assunto</span>
                        <input type="text" name="assunto" required="">
                    </label>
                    
                    <label>
                        <span><i class="icon icon-comment"></i> Mensagem</span>
                         <textarea class="fale" name="mensagem" rows="3" required=""></textarea> 
                    </label>
                   
                   
                    <button class="btn-envia" title="Enviar"><b class="icon icon-paper-plane-o"> Enviar</b></button>

                
                </form>


       

        </div>
                <section class="respostas">

                  <h2>Ultimas mensagens respondidas:</h2>
                      <table class="table">
                      <?php foreach ($resposta as $linha):?>
                      <thead class="thead-dark">
                          <th  ><span>Mensagem do <?php echo $linha['remetente'] ?></span>
                                          <tr>
                                          <td><?php echo $linha['mensagem'] ?></td>
                                          
                                        </tr>
                                        </thead>
                                        <thead >
                                            <th class="red">Resposta:</th> <tr>
                                        </thead>
                                        <td><?php echo $linha['Resposta'] ?></td>

                                            </tr>                
                                  
                                        
                      <?php endforeach ?>
                              
                      </table>

                </section>

</main>



  <footer>
    <h3>Redes Sociais</h3>
    <div class="redes reveal">

      <a href="https://www.facebook.com/rafaelhenrique.oliveira.79/?locale=pt_BR" class="fa fa-facebook"></a>
      <a href="https://github.com/RafaelHOliveira07" class="fa fa-github"></a>
      <a href="https://www.instagram.com/darkkeira420/" class="fa fa-instagram"></a>

    </div>
    <p>pagina web desenvolvida por Rafael Henrique de Oliveira.</p>
  </footer>
  <script type="text/javascript" src="../js/reveal.js"></script>
  <script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>

</html>