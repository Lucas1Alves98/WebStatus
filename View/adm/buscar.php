<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="./images/gt_favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/Padm.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./js/jquery.mask.min.js"></script>
    <title>Area do administrador</title>
</head>
<body>
    <script>
        $(document).ready(function() {
            $("#cpf").mask("000.000.000-00")
        })
    </script>
    <header>
        <div class="header-area">
            <div class="logo">
                <a href="#">
                    <img src="./images/logoadm.png" alt="">
                </a>
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
                <h1>Pesquisa de Alunos</h1>
            </div>
            <br>
            <!-- formulário de Cadastro de Aluno -->
            <div class="text-f">
                <form method="post" action="buscar.php">
                    <label>CPF do Aluno</label> <br>
                    <input id="cpf" type="text" name="Pesquisa" class="campo"  maxlenght="14"><br>
                    <input type="submit" value="Buscar" class="btn">
                    <input type="reset" value="Limpar" class="btn"><br><br>
                </form>
                <?php
                require_once '../../model/modelDao/Conexao.php';
                $con = new Conexao();
                $Pesquisa = filter_input(INPUT_POST, 'Pesquisa');
                $query = $con->conectar()->prepare('select * from adm where cpf = :cpf');
                $query->bindValue(':cpf', $Pesquisa);
                $query->execute();
                $result = $query->fetchAll();//convertendo querry em strinfg
                foreach ($result as $value) {
                    echo 'Nome: ' . $value['nome'] . '<br><br>';
                    echo 'Cpf: ' . $value['cpf'] . '<br><br>';
                    echo 'Nascimento: ' . $value['nascimento'] . '<br><br>';
                    echo 'Sexo: ' . $value['sexo'] . '<br><br>';
                    echo 'Endereco: ' . $value['endereco'] . '<br><br>';
                    echo 'Cep: ' . $value['cep'] . '<br><br>';
                    echo 'Telefone: ' . $value['telefone'] . '<br><br>';
                    echo 'Celular: ' . $value['celular'] . '<br><br>';
                    echo 'Email: ' . $value['email'] . '<br><br>';
                    echo 'Senha: ' . $value['senha'] . '<br><br>';
                    echo 'Comentarios: ' . $value['comentarios'] . '<br><br>';
                }
            ?> 
            </div>
        </section>
</body>
</html>