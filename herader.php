<?php
// echo $_SERVER['SCRIPT_NAME'] . "<br>";
$CRUNT_FILE= basename($_SERVER['SCRIPT_NAME']);

// echo $CRUNT_FILE;
session_start();
?>
		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class=" <?php echo ($CRUNT_FILE == "index.php" ? 'nav-item active': 'nav-item') ?>">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li  class=" <?php echo ($CRUNT_FILE == "shop.php" ? 'nav-item active': 'nav-item') ?>"><a class="nav-link" href="shop.php">Shop</a></li>
						<li class=" <?php echo ($CRUNT_FILE == "about.php" ? 'nav-item active': 'nav-item') ?>"><a class="nav-link" href="about.php">About us</a></li>
						<li class=" <?php echo ($CRUNT_FILE == "services.php" ? 'nav-item active': 'nav-item') ?>"><a class="nav-link" href="services.php">Services</a></li>
						<li class=" <?php echo ($CRUNT_FILE == "blog.php" ? 'nav-item active': 'nav-item') ?>"><a class="nav-link" href="blog.php">Blog</a></li>
						<li class=" <?php echo ($CRUNT_FILE == "contact.php" ? 'nav-item active': 'nav-item') ?>"><a class="nav-link" href="contact.php">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<?php if(empty($_SESSION['users_name'])){ ?>
						<li><a class="nav-link rounded-pill btn-primary px-4" href="singup.php">sing up</a></li>
						<li><a class="nav-link rounded-pill  btn-primary px-4" href="login.php">login</a>
					<?php }else{?>
						<?php  echo $_SESSION['users_name'] ?></a>
						<li><a class="nav-link  btn-primary px-4" href="logout.php">logout</a>
					</li>
					<?php }?>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->  