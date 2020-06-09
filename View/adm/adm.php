

<!DOCTYPE html>
<html lang="pt-br">
<head> 
<meta charset="UTF-8">
    
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
    <input  type="checkbox" id="bt_menu"><!---->
    <label for= "bt_menu"> &#9776; </label><!---->
    <!--começo do  Menu -->
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="#">
                    <li><i class="fa fa-user"></i> Novo Cadastro</li>
                </a>
                <a href="">
                    <li><i class="fa fa-search"></i> Buscar</li>
                </a>
                <a href="">
                    <li><i class="fa fa-trash"></i> Deletar</li>
                </a>
                <a href="">
                    <li><i class="fa fa-bell"></i> Solicitações</li>
                </a>
                <a href="">
                    <li><i class="fa fa-folder"></i> Inserir Aulas</li>
                </a>
                <a href="">
                    <li><i class="fa fa-history"></i> Histórico de Aluno</li>
                </a>
                <a href="AdmLogin.php">
                    <li><i class="fa fa-sign-out"></i> Encerrar</li>
                </a>
            </ul>
        </nav>
        <section>
            <!-- final do menu -->
            <div class="mininav">
                <h1>Cadastro de Alunos</h1>
            </div>
            <br>
            <!-- formulário de Cadastro de Aluno -->
            <div class="text-f">
                <form method="post" action="../../Controller/CadastroController.php">     
                    

                    <input type="text" name="nome" class="campo" maxlenght="40" required autofocus><br>

                    CPF<br>
                <input type="text" name="cpf1" maxlenght="11"  required >
                    <br>
                    
                    Data de Nascimento<br>
                    <input type="date" name="nascimento" class="campo" required><br>
                    <br>
                    Sexo:
                    <select name="sexo">

                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                    <br><br>

                    Endereço<br>
                    <input type="text" name="endereco" class="campo" maxlenght="40" required ><br>

                    Email<br>
                    <input type="email" name="email" class="campo" maxlenght="40" required ><br>

                    Telefone<br>
                    <input type="number" name="tel" class="campo" maxlenght="9"  required ><br>


                    Ocorrência<br>
                    <textarea name="comentario" id="comentarios" style="resize: none">
                Comente aqui...
                
            </textarea><br /><br>


                    <input type="submit" value="Salvar" class="btn">
                    <input type="reset" value="Limpar" class="btn">
                    <br>
                    <br>
                </form>
            </div>
            <!-- final do castrado do aluno -->
        </section>
        <br>
        <br>

</body>



</html>