<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no_js">
	<!--<![endif]-->
	<head>
		<title>Zm+</title>
		<link href="css/main.css" rel="stylesheet" />
		<link href="css/normalize.css" rel="stylesheet" />
		<script src="js/jquery-1.9.1.js" type="text/javascript"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
		<script type="text/javascript">
			function reFresh() {
				window.location.reload();

			}

			function loadImg() {
				document.getElementsByClassName('esc-thumbnail-image');
			}

			function hide() {
				var conteneur = document.getElementById('sid');
				conteneur.style.display = 'none';
				document.getElementById('artic').style.marginLeft = '0px';
			}
		</script>

	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<!-- Add your site or application content here -->

		<div id="corps">
			<header class="bar_haut">
				<a href="/my_project/index.php"><img src="img/logo.png" /></a>

			</header>
			<aside id="sid">
				<a href="/my_project/index.php"> <img src="img/home.png" alt="home page" /></a>
				<img id="reload" src="img/reload.png" alt="reload page" onmouseover="reFresh()"/>
				<img id="session" src="img/session.png" alt="session" />
				<img id="profil" src="img/profil.png" alt="profil" />
				<img id="notif" src="img/notif.png" alt="notification" />
			</aside>
			<article id="artic">
				<br /><br />
				<table><tr>
				<?php 
				include_once('magpierss/rss_fetch.inc');
				$url=array(
					'http://news.yahoo.com/rss/tech',
					'http://news.yahoo.com/rss/sports',
					'http://news.yahoo.com/rss/politics',
					//'http://news.yahoo.com/rss/science',
					'http://news.yahoo.com/rss/entertainment');
				
				for ($i=0; $i <4 ; $i++) { 
					$rss = fetch_rss($url[$i]);
					echo "<td>".$rss->items[1]['title'];
					$img = explode('a>',$rss->items[1]['media']['text'],2);
					echo $img[0]."</td>";
				}
				
				?>
				</tr></table>
			</article>

			<footer id="foot">
					<a href="tst.php">passer >></a>
			</footer>
		</div>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
		<script>
			var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']]; ( function(d, t) {
					var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
					g.src = '//www.google-analytics.com/ga.js';
					s.parentNode.insertBefore(g, s)
				}(document, 'script'));
		</script>
	</body>
</html>
