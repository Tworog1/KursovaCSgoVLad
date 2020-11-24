<!-- <!DOCTYPE html> -->
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="images/Aw.jpg" type="image/png">
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600;700&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> CSGO-Store </title>
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
							<li class="header__navigation-menu_item">
								<a href="../Tread/index.php"> TRADE </a>
							</li>
							<li class="header__navigation-menu_item" onclick="home()">
								<a href="#"> STORE </a>
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
					<!-- Middle -->
					<div class="main__middleside">
						<div class="main__middleside-trade">
							<button class="disactive"> BUY </button>
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
										<input type="checkbox">
										<span class="text__checkbox">Knives</span>
									</div>
									<div class="tupe__wrapper">
										<input type="checkbox">
										<span class="text__checkbox">Gloves</span>
									</div>
									<div class="tupe__wrapper">
										<input type="checkbox">
										<span class="text__checkbox">Assault Rifles</span>
									</div>
									<div class="tupe__wrapper">
										<input type="checkbox">
										<span class="text__checkbox">Sniper Rifles</span>
									</div>
									<div class="tupe__wrapper">
										<input type="checkbox">
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
							<div class="item">
								<div class="item-w">
									<img src="../Store/img_skins/noch1.webp">
									<span class="name">
									<span class="name__color">StatTrak™</span>
									/FN/0.0842</span>
									<span class="prise">₴ 213 323.20</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>

							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/img_skins/noch2.webp">
									<span class="name">
									<span class="name__color">StatTrak™</span>
									/FN/0.1242</span>
									<span class="prise">₴ 173 222.50</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/img_skins/noch3.webp">
									<span class="name">
									<span class="name__color"></span>
									/MW/0.0042</span>
									<span class="prise">₴ 140 123.10</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/img_skins/noch4.webp">
									<span class="name">
									<span class="name__color">StatTrak™</span>
									/WW/0.0842</span>
									<span class="prise">₴ 423 423.22</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/img_skins/noch5.webp">
									<span class="name">
									<span class="name__color">StatTrak™</span>
									/FT/0.0842</span>
									<span class="prise">₴ 622 223.10</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/img_skins/noch6.webp">
									<span class="name">
									<span class="name__color">StatTrak™</span>
									/BS/0.0842</span>
									<span class="prise">₴ 113 231.30</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/img_skins/noch7.webp">
									<span class="name">
									<span class="name__color">StatTrak™</span>
									/MW/0.0842</span>
									<span class="prise">₴ 65 442.13</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/img_skins/noch8.webp">
									<span class="name">
									<span class="name__color"></span>
									/BS/0.0842</span>
									<span class="prise">₴ 124 233.51</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/img_skins/noch9.webp">
									<span class="name">
									<span class="name__color">StatTrak™</span>
									/FN/0.2905</span>
									<span class="prise">₴ 62 654.12</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/img_skins/noch9.webp">
									<span class="name">
									<span class="name__color"></span>
									/FT/0.2502</span>
									<span class="prise">₴ 49 120.52</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/img_skins/noch10.webp">
									<span class="name">
									<span class="name__color"></span>
									/BS/0.0842</span>
									<span class="prise">₴ 23 323.40</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/img_skins/noch11.webp">
									<span class="name">
									<span class="name__color"></span>
									/BS/0.0842</span>
									<span class="prise">₴ 14 323.10</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/images/noch1.webp">
									<span class="name">
									<span class="name__color">StatTrak™</span>
									/FN/0.1442</span>
									<span class="prise">₴ 190 421.42</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/images/noch2.webp">
									<span class="name">
									<span class="name__color"></span>
									/FT/0.5222</span>
									<span class="prise">₴ 236 211.52</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/images/noch3.webp">
									<span class="name">
									<span class="name__color">StatTrak™</span>
									/BS/0.1142</span>
									<span class="prise">₴ 76 123.44</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/images/noch5.webp">
									<span class="name">
									<span class="name__color"></span>
									/FT/0.5342</span>
									<span class="prise">₴ 238 221.12</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/images/noch4.webp">
									<span class="name">
									<span class="name__color"></span>
									/BS/0.4243</span>
									<span class="prise">₴ 269 855.32</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/images/noch6.webp">
									<span class="name">
									<span class="name__color"></span>
									/BS/0.1262</span>
									<span class="prise">₴ 152 242.52</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/images/noch7.webp">
									<span class="name">
									<span class="name__color">StatTrak™</span>
									/FN/0.5242</span>
									<span class="prise">₴ 4 223.10</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/images/noch8.webp">
									<span class="name">
									<span class="name__color">StatTrak™</span>
									/FT/0.1542</span>
									<span class="prise">₴ 55 234.41</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/images/noch9.webp">
									<span class="name">
									<span class="name__color"></span>
									/FT/0.14523</span>
									<span class="prise">₴ 15 222.14</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item-w">
									<img src="../Store/images/noch10.webp">
									<span class="name">
									<span class="name__color"></span>
									/FT/0.6263</span>
									<span class="prise">₴ 22 443.15</span>
									<button class="stule_button" id="19503060663" type="button">
										<span>More info</span>
									</button>
								</div>
							</div>
							<div class="item">
								<div class="item">
									<div class="item-w">
										<img src="../Store/images/noch11.webp">
										<span class="name">
										<span class="name__color">StatTrak™</span>
										/BS/0.1142</span>
										<span class="prise">₴ 11 333.41</span>
										<button class="stule_button" id="19503060663" type="button">
											<span>More info</span>
										</button>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="item">
									<div class="item-w">
										<img src="../Store/images/noch12.webp">
										<span class="name">
										<span class="name__color"></span>
										/FT/0.5244</span>
										<span class="prise">₴ 9 642.33</span>
										<button class="stule_button" id="19503060663" type="button">
											<span>More info</span>
										</button>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="item">
									<div class="item-w">
										<img src="../Store/images/noch13.webp">
										<span class="name">
										<span class="name__color"></span>
										/FT/0.1511</span>
										<span class="prise">₴ 12 423.22</span>
										<button class="stule_button" id="19503060663" type="button">
											<span>More info</span>
										</button>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="item">
									<div class="item-w">
										<img src="../Store/images/noch14.webp">
										<span class="name">
										<span class="name__color">StatTrak™</span>
										/FN/0.3142</span>
										<span class="prise">₴ 2 533.20</span>
										<button class="stule_button" id="19503060663" type="button">
											<span>More info</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>

				</main>
				<footer class="styles_container__rele">
					<a class="style_loga_img" href="#">
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
									<img src="../Tread/images/steam_logo.svg" class="styles_item_steam__2zB6g styles_logo__1Vdz5" alt="logo_steam">
								</a> 
								<a target="_blank" rel="noopener noreferrer" href="#">
									<img src="../Tread/images/twitter_logo.svg" class="styles_item_twitter__2zLB7 styles_logo__1Vdz5" alt="logo_steam">
								</a> 
								<a target="_blank" rel="noopener noreferrer" href="#">
									<img src="../Tread/images/instagram_logo.svg" class="styles_item_twitter__2zLB7 styles_logo__1Vdz5" alt="logo_steam">
								</a> 
								<a target="_blank" rel="noopener noreferrer" href="#">
									<img src="../Tread/images/vk_logo.svg" class="styles_item_twitter__2zLB7 styles_logo__1Vdz5" alt="logo_steam">
								</a> 
								<a target="_blank" rel="noopener noreferrer" href="#">
									<img src="../Tread/images/facebook_logo.svg" class="styles_item_twitter__2zLB7 styles_logo__1Vdz5" alt="logo_steam">
								</a> 
								<a target="_blank" rel="noopener noreferrer" href="#">
									<img src="../Tread/images/discord.svg" class="styles_item_twitter__2zLB7 styles_logo__1Vdz5" alt="logo_steam">
								</a> 
							</div>
						</div>
					</div>
				</footer>


			</div>
		</div>

		<script src="script.js"></script>

	</body>
</html>