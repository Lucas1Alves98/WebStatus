<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <link rel="shortcut icon" href="./images/gt_favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/Padm.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./js/jquery.mask.min.js"></script>
    <title>Area do administrador</title>
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
    <script>
        $(document).ready(function() {
            $("#cpf").mask("000.000.000-00")
            $("#cep").mask("00.000-000")
        })
    </script>
    <!--começo do  Menu -->
    <div class="container">
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
        <section style="padding-bottom: 10px;">
            <!-- final do menu -->
            <div class="mininav">
                <h1>Cadastro de Alunos</h1>
            </div>

            <!-- formulário de Cadastro de Aluno -->
            <div style="margin-top: 10px" class="text-f">
                <form class="formizao" method="post" action="../../controller/CadastroController.php">
                    <label> Nome Completo</label><br>
                    <input type="text" name="nome" class="campo" maxlenght="40" required autofocus><br>
                    <label>CPF</label> <br>
                    <input type="text" name="cpf" class="campo" id="cpf" maxlenght="30">
                    <br>
                    <label>Data de Nascimento</label><br>
                    <input type="text" name="nascimento" class="campo" maxlenght="40" required><br>
                    <br>
                    Sexo:
                    <select name="sexo">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                    <br><br>
                    <label>Endereço</label><br>
                    <input type="text" name="endereco" class="campo" maxlenght="40" required autofocus><br>
                    <label>CEP</label><br>
                    <input type="text" name="cep" id="cep" class="campo" /><br>
                    <label>Telefone</label><br>
                    <input type="text" name="telefone" class="campo" />
                    <br>
                    <label>Celular</label><br>
                    <input type="text" name="celular" class="campo" />
                    <br>
                    <label>E-mail</label><br>
                    <input type="email" name="email" class="campo" maxlenght="40" required autofocus><br>

                    <label>Senha</label><br>
                    <input type="text" name="senha" class="campo" id="celular" />
                    <br>
                    
                    Ocorrência<br>
                    <textarea rows="10" cols="55" maxlength="500" name="comentarios" id="comentarios" style="resize: none">
                    </textarea><br /><br>
                    <input type="submit" class="btn btn-primary" value="Salvar" class="btn">
                    <input type="reset" class="btn btn-outline-success" value="Limpar" class="btn">
                </form>
            </div>
        </section>
    </div>
</body>
</html>