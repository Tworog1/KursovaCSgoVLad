<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="images/Aw.jpg" type="image/png">
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600;700&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> CSGO-Sell </title>
	</head>
	<body>

		<div class="page">
			<div class="page__wrapper">

				<!-- Header -->
				<header class="header">
					<div class="header__logo">
						<img src="images/logo.jpg" alt="logo">
						<h1 class="header__logo-title"> <a class="header__logo-title" href="../index.php">CSGO-T</a> </h1>
					</div>
					<nav class="header__navigation">
						<ul class="header__navigation-menu">
							<li class="header__navigation-menu_item">
								<a href="../Tread/index.php"> TRADE </a>
							</li>
							<li class="header__navigation-menu_item">
								<a href="../Store/index.php"> STORE </a>
							</li>
							<li class="header__navigation-menu_item"onclick="home()">
								<a href="../Sell/index.php"> SELL </a>
							</li>
							<li class="header__navigation-menu_item">
								<a href="#"> FAQ </a>
							</li>
							<li class="header__navigation-menu_item">
								<a href="#"> PRIME </a>
							</li>
						</ul>
					</nav>
					<div class="header__sign">
						<button class="header__sign-btn">SIGN IN THROUGH STEAM </button>
					</div>
				</header>

				<!-- Main -->
				<main class="main">

					<!-- Left -->
					<div class="main__leftside">
						<nav class="navigation">
							<div class="navigation__refresh">
								<img src="images/refresh.svg" alt="refresh">
							</div>
							<div class="navigation__lists">
								<select class="list__games">
									<option> CS:GO </option>
									<option> Dota </option>
									<option> Games </option>
								</select>
								<select class="list__sort">
									<option> Price </option>
									<option> Float </option>
								</select>
							</div>
							<div class="navigation__field">
								<input type="text" placeholder="Search...">
							</div>
						</nav>
						<div class="wrapper__Error">
							<div class="Error">
								<div class="Error__img"><img src="images/warning.svg"></div>
								<h3 class="Error_abs">You're not authorized</h3>
								<h6 class="Error_abc">Remember to set your inventory to Public</h6>
								<a class= "Error_silca" href="https://store.steampowered.com/login/?redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_4__global-header">SIGN IN THROUGH STEAM</a>
							</div>
						</div>	
						<div class="items"></div>
					</div>
					<!-- Right -->
					<div class="main__rightside">
						<div class="main__title">Sell list</div>
						<div class="wrapper__Error">
							<div class="Error">
								<h3 class="Error_abs">No items in sell list</h3>
								<h6 class="Error_abc">Add items that you want to sell</h6>
							</div>

						</div>	
					</div>

				</main>
				
			</div>
		</div>

		<script src="script.js"></script>

	</body>
</html>