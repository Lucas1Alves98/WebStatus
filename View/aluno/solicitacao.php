<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="./images/gt_favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/Paluno.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script type="text/javascript">
        $(document).ready(function(){
            $("#cpf").mask("000.000.000-00")
           
            $("#cep").mask("00.000-000")
           

        })
    </script>
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
                <h1>Solicitação</h1>
            </div>
            <br>
           
            <!-- formulário de Cadastro de Aluno -->
            <div class="text-f">
                <form method="post" action="../../controller/SolicitacoesController.php">

                    <label> Nome Completo</label><br>
                    <input type="text" name="nome" class="campo" maxlenght="40" required autofocus><br>

                    <label>CPF</label> <br>
                    <input type="text" name="cpf" class="campo" id="cpf" maxlenght="14">
                    <br>
                    <label>Renach</label> <br>
                    <input type="text" name="renach" class="campo" id="renach" maxlenght="14">
                    <br>
                    </select>
                    <br>
                    
                    Ocorrência<br>
                    <textarea rows="10" cols="55" maxlength="500" name="comentarios" id="comentarios" style="resize: none">
                     
                
                  </textarea><br /><br>

                   
                    <input type="submit" class="btn btn-primary" value="Enviar" class="btn">
                    <input type="reset" class="btn btn-outline-success" value="Limpar" class="btn">
                    <br>
                    <br>
                </form>
            </div>
            <!-- final do castrado do aluno -->
        </section>







    
</body>
</html>