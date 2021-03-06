<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Contato</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Edição bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Início</a></li>
					<li><a href="empresa.php">Empresa</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorias <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="cat-a.php">Cat A</a></li>
							<li><a href="cat-b.php">Cat B</a></li>
							<li class="active"><a href="cat-ab.php">Cat A/B</a></li>
							<li class="active"><a href="adicao.php">Adição</a></li>
						</ul>
					</li>
					<li class="active"><a href="contato.php">Contato</a></li>
					<li><a class="btn" href="portal-aluno.php">Portal do Aluno</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Início</a></li>
			<li class="active">Contato</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contato</h1>
				</header>
				
				<p>
					
                 Preencha o formulário abaixo para solicitar um orçamento e entraremos em contato com você o mais breve possível.
				</p>
				<br>
					<form action="../controller/EmailController.php" method="POST" name="form_contato">
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" name="nome" type="text" placeholder="Nome">
							</div>
							<div class="col-sm-4">
								<input class="form-control" name="email" type="text" placeholder="Email">
							</div>
							<div class="col-sm-4">
								<input class="form-control" name="telefone" type="text" placeholder="Telefone">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Envie sua dúvida" name="mensagem" class="form-control" rows="9"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label class="checkbox"><input type="checkbox"> Receber notificações</label>
							</div>
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" type="submit" value="Enviar">
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Endereço</h4>
					<address>
						Rua Travasso de fora, Largo da Baixa do Bonfim, nº 2, Salvador - BA
					</address>
					<h4>Telefone:</h4>
					<address>
						(71) 3000-0000
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	
	<section class="container-full top-space">
		<div id="map"></div>
	</section>

	<footer id="footer">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Informações</h3>
						<div class="widget-body">
							<p>Tels.: (71) 3000-0000<br>
								<a href="mailto:#">autoescolastatus@hotmail.com</a><br>
								<br>
								Rua Travasso de fora, Largo da Baixa do Bonfim, nº 2, Salvador - BA
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Redes Sociais</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href="https://www.instagram.com/statuscfc/?igshid=1wxasf06khkrx"><i class="fa fa-instagram fa-2"></i></a>
								<a href="https://www.facebook.com/Status-Autoescola-365678070825783/"><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Confira nossos serviços</h3>
						<div class="widget-body">
							<p>Oferecemos serviços de formação de condutores e treinamentos para aquisição da primeira CNH nas categorias “A” e “B”, para renovação de CNH, para adição ou mudança de categorias.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="index.php">Início</a> | 
								<a href="empresa.php">Empresa</a> |
								<a href="cat-b.php">Categorias</a> |
								<a href="contato.php">Contato</a> |
								<b><a href="portal-aluno.php">Portal do Aluno</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2020, Auto Escola Status. 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
	

</body>
</html>