<!DOCTYPE html>
<html>
<head>
	<!--ALTERAR TITULO-->
	<title>Bem-vindo, <?php echo $_SESSION['nome']; ?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<link href="<?php echo INCLUDE_PATH_STATIC ?>styles/feed.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH_STATIC ?>styles/comunidade.css" rel="stylesheet">


</head>

<body>

	<section class="main-feed">
		<?php 
			include('includes/sidebar.php'); 
		?>
		<div class="feed">
			<div class="comunidade">
			<div class="container-comunidade">
					<h4>Amigos</h4>
					<div class="container-comunidade-wraper">
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Guilherme Grillo</h2>
								<p>guilherme@gmail.com</p>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Guilherme Grillo</h2>
								<p>guilherme@gmail.com</p>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Guilherme Grillo</h2>
								<p>guilherme@gmail.com</p>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Guilherme Grillo</h2>
								<p>guilherme@gmail.com</p>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Guilherme Grillo</h2>
								<p>guilherme@gmail.com</p>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Guilherme Grillo</h2>
								<p>guilherme@gmail.com</p>
							</div>

						</div>
					</div>
			</div>
			<br/>

				<div class="container-comunidade">
					<h4>Comunidade</h4>
					<div class="container-comunidade-wraper">
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Guilherme Grillo</h2>
								<p>guilherme@gmail.com</p>
							<div class="btn-solicitar-amizade">
								<a href="<?php echo INCLUDE_PATH ?>comunidade?solicitarAmizade=10">Solicitar Amizade</a>
							</div>
							</div>
							

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Guilherme Grillo</h2>
								<p>guilherme@gmail.com</p>
								<div class="btn-solicitar-amizade">
								<a href="<?php echo INCLUDE_PATH ?>comunidade?solicitarAmizade=10">Solicitar Amizade</a>
							</div>
							</div>


						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Guilherme Grillo</h2>
								<p>guilherme@gmail.com</p>
								<div class="btn-solicitar-amizade">
								<a href="<?php echo INCLUDE_PATH ?>comunidade?solicitarAmizade=10">Solicitar Amizade</a>
							</div>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Guilherme Grillo</h2>
								<p>guilherme@gmail.com</p>
								<div class="btn-solicitar-amizade">
								<a href="<?php echo INCLUDE_PATH ?>comunidade?solicitarAmizade=10">Solicitar Amizade</a>
							</div>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Guilherme Grillo</h2>
								<p>guilherme@gmail.com</p>
								<div class="btn-solicitar-amizade">
								<a href="<?php echo INCLUDE_PATH ?>comunidade?solicitarAmizade=10">Solicitar Amizade</a>
							</div>
							</div>

						</div>
						<div class="container-comunidade-single">
							<div class="img-comunidade-user-single">
								<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
							</div>
							<div class="info-comunidade-user-single">
								<h2>Guilherme Grillo</h2>
								<p>guilherme@gmail.com</p>
								<div class="btn-solicitar-amizade">
								<a href="<?php echo INCLUDE_PATH ?>comunidade?solicitarAmizade=10">Solicitar Amizade</a>
							</div>
							</div>

						</div>
					</div>
			</div>
			</div>
		</div><!--feed-->
	</section>


</body>


</html>