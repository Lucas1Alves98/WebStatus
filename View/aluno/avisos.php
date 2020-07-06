<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="./images/gt_favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/Paluno.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Portal do Aluno</title>
</head>
<header>
    <div class="header-area">
        <div class="logo">
            <a href="#">
                <img src="./images/logo-aluno.png" alt="">
            </a>
        </div>
</header>
<body>
     <!--começo do  Menu -->
     <div class="container">
        <nav>
            <ul class="menu">
                <a href="solicitacao.php">
                    <li><i class="fa fa-commenting"></i> Solicitação</li>
                </a>
                
                <a href="aulas.php">
                    <li><i class="fa fa-file-pdf-o"></i> Aulas</li>
                </a>
                <a href="avisos.php">
                    <li><i class="fa fa-envelope"></i> Avisos</li>
                </a>
                <a href="../portal-aluno.php">
                    <li><i class="fa fa-sign-out"></i> Encerrar Sessão</li>
                </a>
            </ul>
        </nav>
        <section>
            <!-- final do menu -->
            <div class="mininav">
                <h1>Avisos da Auto Escola</h1>
            </div>
            <br>
            <div class="text-f">
            <form method="post" action="../../controller/AvisosController.php">
            <?php
                        require_once '../../model/modelDao/Conexao.php';
                        

                        $con = new Conexao();

                        $query= $con->conectar()->prepare("select* from avisos ");
                        $query->execute();
                        $resultado=$query->fetchAll();
                        foreach($resultado as $value){
                       
                      echo "Avisos:". $value['comentarios']. ""  ?> <a class="container" href="../../controller/ControllerDelete.php?id=<?php echo $value['id'];?>"> <img src="../assets/images/icons8-excluir-lixeira-24.png"></a><br> <br><?php
               
                        }
                    
                    ?>
                    
                    </div>
            <!-- formulário de Cadastro de Aluno -->
           
                    </div>
            </div>
            <!-- final do castrado do aluno -->
        </section>


    
</body>
</html>