<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IndexCompany</title>
	<link rel="stylesheet" href="general/footerstyle.css">
	<link rel="stylesheet" href="general/headerstyle.css">
	<link rel="stylesheet" href="general/hidemenustyle.css">
	<link rel="stylesheet" href="style/indexstyle.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script
  src="http://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
	<script
  src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
	<script type="text/javascript" src="script/script.js"></script>
	<style>
		.material-icons.md-48 { font-size: 60px; }
		.material-icons.md-26 {font-size: 50px;}
	</style>
</head>
<body>
	<div class="wrapper"><!--Container pentru toata pagina-->
		<?php
			include('general/hidemenu.php');
			include('general/header.php');
		?>
		<div id="container">
			<p id="content">Content</p>
			<button id="project">START HERE</button>
		</div>
				<div id="bodybot">
			<ul id="bodymenu">
				<li class="bmenu">
					<a href="http://project1-indexcompanymd158001.codeanyapp.com/pages/buy.php" class="menulink"><i class="material-icons md-48">shopping_cart</i><p class="linkinfo">Купить</p></a>
					<p class="menutext">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					</p>
				</li>
				<li class="bmenu">
					<a href="http://project1-indexcompanymd158001.codeanyapp.com/pages/order.php" class="menulink"><i class="material-icons md-48">build</i><p class="linkinfo">Заказать</p></a>
					<p class="menutext">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
						dolore magna aliqua.
					</p>
				</li>
				<li class="bmenu">
					<a href="http://project1-indexcompanymd158001.codeanyapp.com/pages/about.php" class="menulink"><i class="material-icons md-48">info_outline</i><p class="linkinfo">О нас</p></a>
					<p class="menutext">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
						dolore magna aliqua.
					</p>
				</li>
			</ul>
		</div>
		<?php
			include('general/footer.php');
		?>
	</div>
</body>
</html>