<!DOCTYPE html>
<html lang="pt-br">

    <link rel="shortcut icon" href="./images/gt_favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/Padm.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Area do administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="header-area">
            <div class="logo">
                <a href="#">
                    <img src="./images/logoadm.png" alt="">
                </a>
            </div>
        </div>
    </header>
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
        </nav>
        <section>
            <!-- final do menu -->
            <div class="mininav">
                <h1>Solicitações de Alunos</h1>
            </div>
            <br>
            <!-- formulário de Cadastro de Aluno -->
            <div class="text-f">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Renach</th>
                            <th scope="col">Comentários</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once '../../model/modelDao/Conexao.php';
                            $con = new Conexao();
                            $query = $con->conectar()->prepare('select * from solicitacao');
                            $query->execute();
                            $resultado = $query->fetchAll();
                            foreach ($resultado as $value) {
                                $id = $value['id'];
                                $nome = $value['nome'];
                                $cpf = $value['cpf'];
                                $renach = $value['renach'];
                                $comentarios = $value['comentarios'];
                                echo "
                                <tr>
                                    <th style=\"width: 100px;\">
                                        <a class=\"excluir\" href='../../controller/ControllerDeleteSolicitacoes.php?id=$id'>
                                            <img src=\"../assets/images/icons8-excluir-lixeira-24.png\">
                                            <div>Deletar</div>
                                        </a>
                                    </th>
                                    <th>$nome</th>
                                    <th>$cpf</th>
                                    <td>$renach</td>
                                    <td>$comentarios</td>
                                </tr>
                                ";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>
</html>