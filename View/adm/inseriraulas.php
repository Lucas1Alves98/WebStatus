<!DOCTYPE html>
<html lang="pt-br">

    <link rel="shortcut icon" href="./images/gt_favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/Padm.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Area do administrador</title>
</head>
<header>
    <div class="header-area">
        <div class="logo">
            <a href="#">
                <img src="./images/logoadm.png" alt="">
            </a>
        </div>
</header>
<body>
    
    <!--começo do  Menu -->
    <div style="height: 90%;" class="container">
        <nav>
            <ul class="menu">
                <a href="adm.php">
                    <li><i class="fa fa-user"></i> Novo Cadastro</li>
                </a>
                <a href="buscar.php">
                    <li><i class="fa fa-search"></i> Buscar</li>
                </a>
                
                <a href="solicitacoes.php">
                    <li><i class="fa fa-bell"></i> Solicitações</li>
                </a>
                <a href="inseriraulas.php">
                    <li><i class="fa fa-folder"></i> Inserir Aulas</li>
                </a>
                <a href="avisos.php">
                    <li><i class="fa fa-folder"></i> Avisos</li>
                </a>
                
                <a href="../admin.php">
                    <li><i class="fa fa-sign-out"></i> Encerrar</li>
                </a>
            </ul>
            </ul>
        </nav>
        <section>
            <!-- final do menu -->
            <div class="mininav">
                <h1>Aulas Teóricas/ Práticas</h1>
            </div>
            <br>
             <!-- formulário de Cadastro de Aluno -->
             <div class="text-f">
                <form method="post" action=" ../../controller/controllerAquivos.php" enctype="multipart/form-data">

                   
                    <label>Aulas Teóricas</label>
                    <br>
                    <input type="file" id="file1"name="arquivo">
                    <br><br>
                    <label>Aulas Práticas</label><br>
                    <input type="file" id="file2"name="arquivo1">
                    <br><br>
                    <input type="submit" value="Enviar" class="btn">
                    <input type="submit" value="Limpar" class="btn">
                </form>
            </div>
            <!-- final do castrado do aluno -->
        <br>
        <br>

</body>



</html>
    





</body>
</html>