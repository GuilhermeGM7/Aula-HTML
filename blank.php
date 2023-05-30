








































<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>
    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +55 0800 371 529</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> electro.shop@outlook.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Barão de Itapetininga - SP 635</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> R$ </a></li>
						<li><a href="./blank.html"><i class="fa fa-user-o"></i> Cadastre-se</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.html" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">Todas as Categorias</option>
										<option value="1">Notebooks</option>
										<option value="1">Fones</option>
									</select>
									<input class="input" placeholder="Pesquise Aqui">
									<button class="search-btn">Pesquisar</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Itens Salvos</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Carrinho</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">NOTEBOOK DELL INSPIRON 15 3000 INTEL CORE I3 - 8GB 256GB SSD 15,6” FULL HD WINDOWS 11</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>R$1.200,00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">HEADSET GAMER USB WARRIOR FLAMMA LED PH306 WARRIOR</a></h3>
													<h4 class="product-price"><span class="qty">2x</span>R$250,00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>2 Item(s) selecionados</small>
											<h5>SUBTOTAL: R$1.450,00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">Ver Carrinho</a>
											<a href="./checkout.html">Finalizar Compra<i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Cadastre-se</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Início</a></li>
							<li class="active">Cadastro</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
		<!doctype html>
		<html lang="zxx">
		
		<head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<title>Electro</title>
			<link rel="icon" href="img/favicon.png">
			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<!-- animate CSS -->
			<link rel="stylesheet" href="css/animate.css">
			<!-- owl carousel CSS -->
			<link rel="stylesheet" href="css/owl.carousel.min.css">
			<!-- font awesome CSS -->
			<link rel="stylesheet" href="css/all.css">
			<!-- flaticon CSS -->
			<link rel="stylesheet" href="css/flaticon.css">
			<link rel="stylesheet" href="css/themify-icons.css">
			<!-- font awesome CSS -->
			<link rel="stylesheet" href="css/magnific-popup.css">
			<!-- swiper CSS -->
			<link rel="stylesheet" href="css/slick.css">
			<!-- style CSS -->
			<link rel="stylesheet" href="css/style.css">
		</head>
		
		<body>
			<!--::header part start::-->
			<header class="main_menu home_menu">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12">
								
								<div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
									<ul class="navbar-nav">
									
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
												<a class="dropdown-item" href="category.html">categoria</a>
												<a class="dropdown-item" href="single-product.html">proudos</a>
												
											</div>
										</li>
										
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
												<a class="dropdown-item" href="login.html"> login</a>
												<a class="dropdown-item" href="tracking.html">Monitoramento</a>
												<a class="dropdown-item" href="checkout.html">Produtos</a>
												<a class="dropdown-item" href="cart.html">shopping cart</a>
												<a class="dropdown-item" href="confirmation.html">Confirmação</a>
												<a class="dropdown-item" href="elements.html">Elementos</a>
											</div>
										</li>
									
											</a>
											
											</div>
										</li>
										
										</li>
									</ul>
								</div>
								
										</a>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<div class="search_input" id="search_input_box">
					<div class="container ">
						<form class="d-flex justify-content-between search-inner">
						
						</form>
					</div>
				</div>
			</header>
			<!-- Header part end-->
		
			<!--================login_part Area =================-->
			

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <?php if (isset($_SESSION['msg'])) 
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
     ?>
     <form action="processa.php" method="post">
     <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email">
    </div>
	<div class="mb-3">
	<label for="exampleFormControlInput1" class="form-label">CPF</label>
    <input type="num" class="form-control" name="CPF" id="CPF">
    </div>
	<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">RG</label>
    <input type="text" class="form-control" name="rg" id="rg">
    </div>
	<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Data de Nascimento</label>
    <input type="text" class="form-control" name="Data de Nascimento" id="data de nascimento">
    </div>
	<div class="mb-4">
    <label for="exampleFormControlInput1" class="form-label">Sexo</label>
	<select class="input-select">
										<option value="Masculino">Masculino</option>
										<option value="Feminino">Feminino</option>
										<option value="Prefiro não informar">Prefiro não informar</option>
									</select>
							</div>
						</div>
    </div>

	<div style="width: 800px; padding-left: 100px">
	<input type="submit" class="btn btn-success" value="Cadastrar">
	</div>
    
     </form>
     <br>
     <hr>
     <br>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data de criação</th>
	  <th scope="col">CPF</th>
	  <th scope="col">Data de Nascimento</th>
	  <th scope="col">RG</th>
	  <th scope="col">Sexo</th>
      <th scope="col" id="treditar">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
     <?php 
     require_once("conexao.php");

     $result_usuario = "SELECT * FROM usuarios";
     $resultado_usuario = mysqli_query($conn, $result_usuario);

     while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
    ?>
    <tr>
        <td><?php echo "<p id='nome-mudar".$row_usuario['id']."'>".$row_usuario['nome']."</p>";?></td>
        <td><?php echo "<p id='email-mudar".$row_usuario['id']."'>".$row_usuario['email']."</p>";?></td>
		<td><?php echo "<p id='created-mudar".$row_usuario['id']."'>".$row_usuario['created']."</p>";?></td>
		<td><?php echo "<p id='CPF-mudar".$row_usuario['id']."'>".$row_usuario['CPF']."</p>";?></td>
		<td><?php echo "<p id='Data de Nascimento-mudar".$row_usuario['id']."'>".$row_usuario['Data_Nasc']."</p>";?></td>
		<td><?php echo "<p id='RG-mudar".$row_usuario['id']."'>".$row_usuario['RG']."</p>";?></td>
		<td><?php echo "<p id='Sexo-mudar".$row_usuario['id']."'>".$row_usuario['Sexo']."</p>";?></td>
        <td><?php echo $row_usuario['created'];?></td>
        <td><button id="btn-editar<?php echo $row_usuario['id'] ?>" style="background-color: transparent; border: none;" onclick="editar(<?php echo $row_usuario['id']; ?>)"><img src="img/edit.png" width="40" height="40"></button>
        <button id="btn-salvar<?php echo $row_usuario['id'] ?>" style="background-color: transparent; border: none; display:none;" onclick="salvar(<?php echo $row_usuario['id']; ?>)"><img src="img/save.png" width="40" height="40"></button></td>
        <td><button id="btn-excluir<?php echo $row_usuario['id'] ?>" style="background-color: transparent; border: none;" onclick="excluir(<?php echo $row_usuario['id']; ?>)"><img src="img/excluir.png" width="40" height="40"></button></td>
    </tr>
    <?php
     }
     ?>
     </tbody>
</table>
<script>
    function editar(id){
        var nome = document.getElementById('nome-mudar' + id)
        var email = document.getElementById('email-mudar' + id)
		var created = document.getElementById('Data de criacao-mudar' + id)
		var CPF = document.getElementById('CPF-mudar' + id)
		var Data_Nasc = document.getElementById('Data_Nasc-mudar' + id)
		var RG = document.getElementById('RG-mudar' + id)
		var Sexo = document.getElementById('sexo-mudar' + id)

        nome.innerHTML = "<input type='text' id='nome-text"+ id +"' value='"+nome.innerHTML.trim()+"'>"
        email.innerHTML = "<input type='email' id='email-text"+ id +"' value='"+email.innerHTML.trim()+"'>"
		created.innerHTML = "<input type='Data de criacao' id='Data de criação-text"+ id +"' value='"+create.innerHTML.trim()+"'>"
		CPF.innerHTML = "<input type='CPF' id='CPF-text"+ id +"' value='"+CPF.innerHTML.trim()+"'>"
		Data_Nasc.innerHTML = "<input type='Data_Nasc' id='Data_Nasc-text"+ id +"' value='"+Data_Nasc.innerHTML.trim()+"'>"
		RG.innerHTML = "<input type='RG' id='RG-text"+ id +"' value='"+RG.innerHTML.trim()+"'>"
		Sexo.innerHTML = "<input type='Sexo' id='Sexo-text"+ id +"' value='"+Sexo.innerHTML.trim()+"'>"

        document.getElementById('btn-editar' + id).style.display = "none"
        document.getElementById('btn-salvar' + id).style.display = "block"
        document.getElementById('treditar').innerText = "Salvar"

    }

    async function salvar(id){
        console.log(id)
        var nome_val = document.getElementById('nome-text' + id).value
        var email_val = document.getElementById('email-text' + id).value
		var created_val = document.getElementById('Data de criacao-text' + id).value
		var CPF_val = document.getElementById('CPF-text' + id).value
		var Data_Nasc_val = document.getElementById('Data_Nasc-text' + id).value
		var RG_val = document.getElementById('RG-text' + id).value
		var Sexo_val = document.getElementById('Sexo-text' + id).value

        document.getElementById('nome-mudar' + id).innerHTML = nome_val
        document.getElementById('email-mudar' + id).innerHTML = email_val
		document.getElementById('Data de criacao-mudar' + id).innerHTML = created_val
		document.getElementById('CPF-mudar' + id).innerHTML = CPF_val
		document.getElementById('Data_Nasc-mudar' + id).innerHTML = Data_Nasc_val
		document.getElementById('RG-mudar' + id).innerHTML = RG_val
		document.getElementById('Sexo-mudar' + id).innerHTML = Sexo_val

        var dadosForm = "id=" + id + "&nome=" + nome_val + "&email=" + email_val "&Data de criação=" + created_val "&CPF=" + CPF_val "&Data_Nasc=" + Data_Nasc_val "&RG=" + RG_val "&Sexo=" + Sexo_val

        const dados = await fetch("./editar.php", {
        method: "POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: dadosForm
    });

        document.getElementById('btn-editar' + id).style.display = "block"
        document.getElementById('btn-salvar' + id).style.display = "none"
        setTimeout(function() {
   window.location.reload(1);
 }, 100);
    }

    async function excluir(id){
        var dadosForm = "id=" + id;

const dados = await fetch("excluir.php", {
    method: "POST",
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: dadosForm
});
setTimeout(function() {
   window.location.reload(1);
 }, 100);
    }
</script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
			<!--================login_part end =================-->
		
			<!--::footer_part start::-->
			<footer class="footer_part">
				<div class="container">
					<div class="row justify-content-around">
						<div class="col-sm-6 col-lg-2">
							<div class="single_footer_part">
								
								</ul>
							</div>
						</div>
						<div class="col-sm-6 col-lg-2">
							<div class="single_footer_part">
							
			
									</form>
								</div>
							</div>
						</div>
					</div>
		
				</div>
				<div class="copyright_part">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="copyright_text">
									
		 
								</div>
							</div>
							
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!--::footer_part end::-->
		
			<!-- jquery plugins here-->
			<!-- jquery -->
			<script src="js/jquery-1.12.1.min.js"></script>
			<!-- popper js -->
			<script src="js/popper.min.js"></script>
			<!-- bootstrap js -->
			<script src="js/bootstrap.min.js"></script>
			<!-- easing js -->
			<script src="js/jquery.magnific-popup.js"></script>
			<!-- swiper js -->
			<script src="js/swiper.min.js"></script>
			<!-- swiper js -->
			<script src="js/masonry.pkgd.js"></script>
			<!-- particles js -->
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<!-- slick js -->
			<script src="js/slick.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>
			<script src="js/contact.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.form.js"></script>
			<script src="js/jquery.validate.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/stellar.js"></script>
			<script src="js/price_rangs.js"></script>
			<!-- custom js -->
			<script src="js/custom.js"></script>
		</body>
		
		</html>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Sobre Nós</h3>
								<p>Procuramos acima de tudo oferecer o que há de melhor, os melhores fornecedores, os mais atualizados produtos, o mais atencioso dos atendimentos, juntamente com os preços mais competitivos e atraentes do mercado para que nosso público encontre não apenas variedade e qualidade, mas também uma empresa que se preocupa com a felicidade e total satisfação de seus clientes e por que não, amigos!</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Barão de Itapetininga - SP 635</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+55 0800 371 529</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>electro.shop@outlook.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorias</h3>
								<ul class="footer-links">
									<li><a href="#">Promoções</a></li>
									<li><a href="#">Notebooks</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="./store.html">Produtos</a></li>
									<li><a href="#">Acessórios</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informações</h3>
								<ul class="footer-links">
									<li><a href="#">Sobre Nós</a></li>
									<li><a href="#">Fale Conosco</a></li>
									<li><a href="#">Política de Privacidade</a></li>
									<li><a href="#">Pedidos e Devoluções</a></li>
									<li><a href="#">Termos & Condições</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Serviço</h3>
								<ul class="footer-links">
									<li><a href="#">Minha Conta</a></li>
									<li><a href="#">Ver Carteira</a></li>
									<li><a href="#">Produtos Salvos</a></li>
									<li><a href="#">Rastrear Entrega</a></li>
									<li><a href="#">Ajuda</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos estão reservados | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>


						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
