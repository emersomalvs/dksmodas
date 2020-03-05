<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Loja 2.0</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.structure.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.theme.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />
		<!-- Font Awesome -->
		  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">
		  <!-- Ionicons -->
		  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
	</head>
	<body>
<nav class="div_menu">
	<div class="container">
		<div class="nav_menu nav_menu_left">
		  <ol>
		    <a href="<?php echo BASE_URL; ?>"><li class="nav_menu-item">Home</li></a>
		    <a href="<?php echo BASE_URL; ?>perfil"><li class="nav_menu-item">Perfil</li></a>
		    <a href="<?php echo BASE_URL; ?>perfil"><li class="nav_menu-item">Widgets</li></a>
		    <a href="<?php echo BASE_URL; ?>perfil"><li class="nav_menu-item">Contact</li></a>
		  </ol>
		</div>

		<div class="nav_menu nav_menu_right">
				<ol>
					<a href="#"><li class="nav_menu-item"><i class="fab fa-instagram"></i></li></a>
					<a href="#"><li class="nav_menu-item"><i class="fab fa-facebook"></i></li></a>
					<a href="#"><li class="nav_menu-item"><i class="fab fa-whatsapp"></i></li></a>
					<a href="#"><li class="nav_menu-item"><i class="far fa-envelope"></i></li></a>
				</ol>
		</div>
	</div>
</nav>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-2 logo">
						<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/logo.png" /></a>
					</div>
					<div class="col-sm-6">
							<div class="s010">
      <form action="<?php echo BASE_URL; ?>busca" method="GET">
        <div class="inner-form">
          <div class="basic-search">
            <div class="input-field">
              <input id="search" type="text" name="s" value="<?php echo (!empty($viewData['searchTerm']))?$viewData['searchTerm']:''; ?>" placeholder="Pesquise aqui" />
              <div class="icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
					</div>
					<div class="col-sm-2">

							<div class="logado">
								<div class="cartlogado">
								<div class="logadonicon">
									<?php $this->loadViewInTemplate('footer', $viewData);?>
								</div>
									
								</div>
							</div>
						
					</div>
					<div class="col-sm-2">
						
					</div>					
				</div>
			</div>
		</header>
		<div class="menu_div">
			<nav class="menu">
				<div class="container"><center><b><br>colocar alguma coisa aqui</b></center></div>
			</nav>
		</div>
		
		<div class="container">
		<div class="anuncio">
			<div class="caixadeanuncio">
				ANUNCIO AQUI
			</div>
		</div>
		</div>

			<div class="container">
				<div class="row">
					<br>
					<?php if(isset($viewData['sidebar'])): ?>
				  		<div class="col-sm-3">
				  			<?php $this->loadView('sidebar', array('viewData'=>$viewData)); ?>
				  		</div>
				  		<div class="col-sm-9"><?php $this->loadViewInTemplate($viewName, $viewData); ?></div>
					<?php else: ?>
						<div class="col-sm-12"><?php $this->loadViewInTemplate($viewName, $viewData); ?></div>
					<?php endif; ?>
				</div>
	    	</div>
<br>
	    <footer>

<br>
	    	<div class="links">
	    		<div class="container">
	    			<div class="row">
						<div class="col-sm-4">
							<a href="<?php echo BASE_URL; ?>"><img width="150" src="<?php echo BASE_URL; ?>assets/images/logo.png" /></a><br/><br/>
							<strong>Slogan da Loja Virtual</strong><br/><br/>
							Endereço da Loja Virtual
						</div>
						<div class="col-sm-8 linkgroups">
							<div class="row">
								<div class="col-sm-4">
									<h3><?php $this->lang->get('CATEGORIES'); ?></h3>
									<ul>
										<li><a href="#">Categoria X</a></li>
										<li><a href="#">Categoria X</a></li>
										<li><a href="#">Categoria X</a></li>
										<li><a href="#">Categoria X</a></li>
										<li><a href="#">Categoria X</a></li>
										<li><a href="#">Categoria X</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
									<h3><?php $this->lang->get('INFORMATION'); ?></h3>
									<ul>
										<li><a href="#">Menu 1</a></li>
										<li><a href="#">Menu 2</a></li>
										<li><a href="#">Menu 3</a></li>
										<li><a href="#">Menu 4</a></li>
										<li><a href="#">Menu 5</a></li>
										<li><a href="#">Menu 6</a></li>
									</ul>
								</div>
								<div class="col-sm-4">
									<h3><?php $this->lang->get('INFORMATION'); ?></h3>
									<ul>
										<li><a href="#">Menu 1</a></li>
										<li><a href="#">Menu 2</a></li>
										<li><a href="#">Menu 3</a></li>
										<li><a href="#">Menu 4</a></li>
										<li><a href="#">Menu 5</a></li>
										<li><a href="#">Menu 6</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
	    		</div>
	    	</div>
	    	<div class="copyright">
	    		<div class="container">
	    			<div class="row">
						<div class="col-sm-6">© <span>Loja 2.0</span> - <?php $this->lang->get('ALLRIGHTRESERVED'); ?>.</div>
						<div class="col-sm-6">
							<div class="payments">
								<img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
								<img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
								<img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
								<img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
							</div>
						</div>
					</div>
	    		</div>
	    	</div>
	    </footer>
		<script type="text/javascript">
		var BASE_URL = '<?php echo BASE_URL; ?>';
		<?php if(isset($viewData['filters'])): ?>
		var maxslider = <?php echo $viewData['filters']['maxslider']; ?>;
		<?php endif; ?>
		</script>
		
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>