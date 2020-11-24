<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="images/Aw.jpg" type="image/png">
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600;700&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> CSGO-Tread </title>
	</head>
	<body>

		<div class="page">
			<div class="page__wrapper">

				<!-- Header -->
				<header class="header">
					<div class="header__logo">
						<img src="images/logo.jpg" alt="logo">
						<h1 class="header__logo-title"> 
							<a class="header__logo-title" href="../index.php">CSGO-T</a> 
						</h1>
					</div>
					<nav class="header__navigation">
						<ul class="header__navigation-menu">
							<li class="header__navigation-menu_item" onclick="home()">
								<a href="#"> TRADE </a>
							</li>
							<li class="header__navigation-menu_item">
								<a href="../Store/index.php"> STORE </a>
							</li>
							<li class="header__navigation-menu_item">
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
							<div class="navigation__cash">
								<span class="price"> ₴ 0 </span>
								<img src="images/shopping-cart.svg" alt="cart">
							</div>
						</nav>
						<div class="items__left">
							<div class="items__centr">
								<img src="images/sign in_1.png">
								<h3>Log in through Steam to download your inventory first.</h3>
								<button class="header__sign-btn">SIGN IN THROUGH STEAM </button>
							</div>
						</div>
					</div>

					<!-- Middle -->
					<div class="main__middleside">
						<div class="main__middleside-trade">
							<button class="disactive"> TRADE </button>
						</div>
						<div class="main__middleside-price category" >
							<div class="price__btn btn _1" onclick="viewDiv(1)">
								<span class="title"> Price </span>
								<span class="icon s_1"> + </span>
							</div>
							<div class="price__content c_1">
								<div class="price__imput">
									<div class="price__left">
										<form class="price__form">
											<input tupe="text" placeholder="0.00" class="priсe__imput1" input="min" value>
											<button type="submit"></button>
										</form>
										<span class="price__cena">₴</span>
									</div>
									<div class="price__centr"></div>
									<div class="price__right">
										<form class="price__form">
											<input tupe="text" placeholder="0.00" class="priсe__imput1" input="min" value>
											<button type="submit"></button>
										</form>
										<span class="price__cena">₴</span>
									</div>
								</div>
							</div>
						</div>
						<div class="main__middleside-type category">
							<div class="type__btn btn _2" onclick="viewDiv(2)">
								<span class="title"> Type </span>
								<span class="icon s_2"> + </span>
							</div>
							<div class="type__content c_2">
								<div class="tupe__content1">
									<div class="tupe__wrapper">
										<input type="radio" class="orushka" name="r" data-name="Knives" onclick="xhrRequests()">
										<span class="text__checkbox">Knives</span>
									</div>
									<div class="tupe__wrapper">
										<input type="radio" class="orushka" name="r" data-name="Gloves" onclick="xhrRequests()">
										<span class="text__checkbox">Gloves</span>
									</div>
									<div class="tupe__wrapper">
										<input type="radio" class="orushka" name="r" data-name="Assault Rifles" onclick="xhrRequests()">
										<span class="text__checkbox">Assault Rifles</span>
									</div>
									<div class="tupe__wrapper">
										<input type="radio" class="orushka" name="r" data-name="Sniper Rifles" onclick="xhrRequests()">
										<span class="text__checkbox">Sniper Rifles</span>
									</div>
									<div class="tupe__wrapper">
										<input type="radio" class="orushka" name="r" data-name="Machineguns" onclick="xhrRequests()">
										<span class="text__checkbox">Machineguns</span>
									</div>
								</div>
							</div>
						</div>
						<div class="main__middleside-exterior category">
							<div class="exterior__btn btn _3" onclick="viewDiv(3)">
								<span class="title"> Exterior </span>
								<span class="icon s_3"> + </span>
							</div>
							<div class="exterior__content c_3">
								<div class="tupe__content1">
									<div class="tupe__wrapper">
										<input type="checkbox">
										<span class="text__checkbox">Factory New</span>
									</div>
									<div class="tupe__wrapper">
										<input type="checkbox">
										<span class="text__checkbox">Minimal Wear</span>
									</div>
									<div class="tupe__wrapper">
										<input type="checkbox">
										<span class="text__checkbox">Field-Tested</span>
									</div>
									<div class="tupe__wrapper">
										<input type="checkbox">
										<span class="text__checkbox">Well-Worn</span>
									</div>
									<div class="tupe__wrapper">
										<input type="checkbox">
										<span class="text__checkbox">Battle-Scarred</span>
									</div>
								</div>
							</div>
						</div>
						<div class="main__middleside-colour category">
							<div class="colour__btn btn _4" onclick="viewDiv(4)">
								<span class="title"> Colour </span>
								<span class="icon s_4"> + </span>
							</div>
							<div class="colour__content c_4">
								<img class="color__img" src="images/red-orage.svg">
								<img class="color__img" src="images/dabl-blu.svg">
								<img class="color__img" src="images/dabl-elov.svg">
								<img class="color__img" src="images/dabl-grin.svg">
								<img class="color__img" src="images/dabl-purple.svg">
								<img class="color__img" src="images/dabl-siriy.svg">
								<img class="color__img" src="images/dabl-call.svg">
							</div>
						</div>
						<div class="main__middleside-other category">
							<div class="other__btn btn _5" onclick="viewDiv(5)">
								<span class="title"> Other </span>
								<span class="icon s_5"> + </span>
							</div>
							<div class="other__content c_5">
								<div class="tupe__content1">
									<div class="tupe__wrapper">
										<input type="checkbox">
										<span class="text__checkbox">StatTrak™</span>
									</div>
									<div class="tupe__wrapper">
										<input type="checkbox">
										<span class="text__checkbox">Stickers</span>
									</div>
									<div class="tupe__wrapper">
										<input type="checkbox">
										<span class="text__checkbox">User items</span>
									</div>
								</div>
							</div>
						</div>
						<div class="main__middleside-reset" onclick="home()">
							<button> RESET FILTERS </button>
						</div>
					</div>

					<!-- Right -->
					<div class="main__rightside">
						<nav class="navigation">
							<div class="navigation__cash">
								<img src="images/shopping-cart.svg" alt="cart">
								<span class="price"> ₴ 0 </span>
							</div>
							<div class="navigation__field">
								<input type="text" placeholder="Search...">
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
							<div class="navigation__refresh">
								<img src="images/refresh.svg" alt="refresh">
							</div>
						</nav>
						<div class="items">

							<?php

								$host = 'localhost';
								$user = 'root';
								$pass = '';
								$db_name = 'csgo';
								$link = mysqli_connect($host, $user, $pass, $db_name);

								if (!$link) 
								{
									echo 'Неможливо приєднатись до БД. Код помилки: ' . mysqli_connect_errno() . ', помилка: ' . mysqli_connect_error();
									exit;
								}
									$sql = mysqli_query($link, "SELECT `id`, `StatTrak`, `Float`, `Prise`, `image`, `quality` FROM `skins`");
									while ($result = mysqli_fetch_array($sql))
									{
										echo
										'
										<div class="item" >
											<div class="item-w">
												<img src="'.$result['image'].'">
												<span class="name">
												<span class="name__color">'.$result['StatTrak'].'</span>
												/'.$result['quality'].'/'.$result['Float'].'</span>
												<span class="prise">₴ '.$result['Prise'].'</span>
												<button onclick="getGamePage('.$result['id'].')" class="stule_button" id="19503060663" type="button">
													<span>More info</span>
												</button>
											</div>
										</div>
										';
									}
							?>

						</div>
					</div>

				</main>
				<footer class="styles_container__rele">
					<a class="style_loga_img" href="#" onclick="Pricol()">
						<img src="images/logo.jpg" class="loga_img" alt="loga">
					</a>
					<div class="styles_inner_container__E4VxZ">
						<div class="styles_item__3ud1J">
							<h3>Main</h3>
							<ul>
								<li><a href="Tread/index.php">Trade</a><li>
								<li><a href="Store/index.php">Store</a><li>
								<li><a href="Sell/index.php">Sell</a><li>
								<li><a href="#">FAQ</a><li>
							</ul>
						</div>
						<div class="styles_item__3ud1J">
							<h3>Assistive</h3>
							<ul>
								<li><a href="#">Personal area</a><li>
								<li><a href="#">Item status</a><li>
								<li><a href="#">Trade bots</a><li>
								<li><a href="#">Price policy</a><li>
							</ul>
						</div>
						<div class="styles_item__3ud1J">
							<h3>Resources</h3>
							<ul>
								<li><a href="#">Privacy policy</a><li>
								<li><a href="#">Terms of use</a><li>
								<li><a href="#">Recurring payment</a><li>
								<li><a href="#">Bug bounty</a><li>
							</ul>
						</div>
						<div class="styles_item__3ud1J">
							<h3>Our projects</h3>
							<ul>
								<li><a href="#">DOTA.T</a><li>
								<li><a href="#">Skin builder</a><li>
								<li><a href="#">Wikipedia</a><li>
								<li><a href="#">WW</a><li>
							</ul>
						</div>
						<div class="styles_item__3ud1J">
							<h3>Contact us</h3>
							<div class="styles_wrap__pHhS-">
								<a target="_blank" rel="noopener noreferrer" href="#">
									<img src="images/steam_logo.svg" class="styles_item_steam__2zB6g styles_logo__1Vdz5" alt="logo_steam">
								</a> 
								<a target="_blank" rel="noopener noreferrer" href="#">
									<img src="images/twitter_logo.svg" class="styles_item_twitter__2zLB7 styles_logo__1Vdz5" alt="logo_steam">
								</a> 
								<a target="_blank" rel="noopener noreferrer" href="#">
									<img src="images/instagram_logo.svg" class="styles_item_twitter__2zLB7 styles_logo__1Vdz5" alt="logo_steam">
								</a> 
								<a target="_blank" rel="noopener noreferrer" href="#">
									<img src="images/vk_logo.svg" class="styles_item_twitter__2zLB7 styles_logo__1Vdz5" alt="logo_steam">
								</a> 
								<a target="_blank" rel="noopener noreferrer" href="#">
									<img src="images/facebook_logo.svg" class="styles_item_twitter__2zLB7 styles_logo__1Vdz5" alt="logo_steam">
								</a> 
								<a target="_blank" rel="noopener noreferrer" href="#">
									<img src="images/discord.svg" class="styles_item_twitter__2zLB7 styles_logo__1Vdz5" alt="logo_steam">
								</a> 
							</div>
						</div>
					</div>
				</footer>

			</div>

			<?php

			if (isset($_GET['skin'])) {

				$host = 'localhost';
				$user = 'root';
				$pass = '';
				$db_name = 'csgo';
				$link = mysqli_connect($host, $user, $pass, $db_name);

				$skin = $_GET['skin'];

				if (!$link) {
					echo 'Неможливо приєднатись до БД. Код помилки: ' . mysqli_connect_errno() . ', помилка: ' . mysqli_connect_error();
					exit;
				}

				$sql = mysqli_query($link, "SELECT `id`, `naming`, `StatTrak`, `Float`, `Float2`, `Prise`, `image`, `img`, `LinkScr`, `LinkScrGM`, `Link3D`,`quality` FROM `skins` WHERE `id`=$skin");
				while ($result = mysqli_fetch_array($sql)) {

					echo 
					'<div class="alert__wrapper';
					if (isset($skin))
					{
						echo " active";
					}
					echo'" id="'. $result['id'] .'">
						<div class="alert" id="'. $result['id'] .'">
							<div class="styles__container">
								<div class="styles__item">
									<div class="image">
										<div class="image__wrapper">
											<img src="'. $result['img'] .'">
										</div>
									</div>
									<div class="styles__desctop">
										<div class="styles__links">
											<a href="'. $result['LinkScr'] .'" class="styles__links_1">screenshot
												<img class="image__up-arrow" src="images/up-arrow.svg">
											</a>
											<a href="'. $result['LinkScrGM'] .'" class="styles__links_1">In-game screenshots
												<img class="image__up-arrow" src="images/up-arrow.svg">
											</a>
											<a href="'. $result['Link3D'] .'" class="styles__links_1">3D view
												<img class="image__up-arrow" src="images/up-arrow.svg">
											</a>
										</div>
										<div class="styles_delimetr__1SlvT"></div>
									</div>
								</div>
								<div>
									<div class="styles__desctop">
										<div class="styles__container_1">
											<span class="name">
												<span class="name__color">'. $result['StatTrak'] . $result['quality'] .'</span>
											/ Factory New</span>
											<div class="styles_name">'. $result['naming'] .'</div>
										</div>
									</div>
									<div class="styles__wrapper">
										<div class="styles__area">
											<div class="styles__float">
												<div class="styles__wrapper__color">
													<div class="styles__fn"></div>
													<div class="styles__mw"></div>
													<div class="styles__ft"></div>
													<div class="styles__ww"></div>
													<div class="styles__bs"></div>
													<div class="styles_unavailable left" style="width: 6%;"></div>
													<div class="styles_unavailable right" style="width: 20%;"></div>
													<svg widht="20" height="21" viewBox="0 0 20 21"
													class="styles_arrow__27TfF" style="left: '. $result['Float2'] .'%">
													<path d="M4.5 7.115V2a2 2 0 012-2h7a2 2 0 012 2v5.115a2 2 0 01-.655 1.48L10 13 5.155 8.595a2 2 0 01-.655-1.48z"></path>
													</svg>
												</div>
												<div class="styles__float__namber">
													<div class="styles__float__title">Float</div>
													<div class="styles__float__value">'. $result['Float'] .'</div>
												</div>
												<div class="styles_divider"></div>
											</div>
											<div class="styles__divider"></div>
											<div class="styles__row">
												<span class="styles_title">Rarity</span>
												<span class="styles_row_value">Covert</span>
											</div>
										</div>
										<div class="styles__area">
											<div class="styles_from">
												<div class="styles_cases">
													<div class="styles_case__title">
														<img src="images/case.webp" alt="collection_icon"
														class="styles_collection_icon__2f7ut">
														<span class="style__text">Сan fall out of 11 cases</span>
													</div>
													<div class="styles__wrapper">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="styles_icon__1jMzA styles_info_icon__Pk6di styles_case_info__Tvqhl">
															<path d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0zm0 21.818c-5.414 0-9.818-4.404-9.818-9.818S6.586 2.182 12 2.182 21.818 6.586 21.818 12 17.414 21.818 12 21.818z"></path>
															<path d="M12 5.09A1.456 1.456 0 0012 8a1.456 1.456 0 000-2.91zM12 10.182a1.09 1.09 0 00-1.09 1.09v6.546a1.09 1.09 0 102.181 0v-6.545a1.09 1.09 0 00-1.09-1.091z"></path>
														</svg>
													</div>
												</div>
											</div>
										</div>
									
									</div>
									<div>
										<div class="styles_delimiter"></div>
										<div class="styles_price_block">
											<div class="styles_price_wrap">
												<div class="styles_information">
													<div class="styles_price_container">
														<span class="styles_price__1m7op styles_price__YsL_z" data-abbr="₴ 438.36k">
															<span>₴ '. $result['Prise'] .'</span>
														</span>
													</div>
													<div class="styles_wrapper">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="styles_icon__1jMzA styles_info_icon__3njTY styles_icon__1dMIz">
															<path d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0zm0 21.818c-5.414 0-9.818-4.404-9.818-9.818S6.586 2.182 12 2.182 21.818 6.586 21.818 12 17.414 21.818 12 21.818z"></path>
															<path d="M12 5.09A1.456 1.456 0 0012 8a1.456 1.456 0 000-2.91zM12 10.182a1.09 1.09 0 00-1.09 1.09v6.546a1.09 1.09 0 102.181 0v-6.545a1.09 1.09 0 00-1.09-1.091z"></path>
														</svg>
													</div>
												</div>
											</div>
										</div>
										<div class="styles_desktop">
											<div class="styles_wrapper_1">
												<button class="styles__button">
													<span>Add to trade</span>
												</button>
											</div>
										</div>
									</div>
								</div>
								<div></div>
							</div>
							<button class="style__close" onclick="home()"  type="button" aria-label="close"></button>
						</div>
						</div>
						';
				}
			} 
				
			?>

				
			
		</div>

		<script src="script.js"></script>
	</body>
</html>
