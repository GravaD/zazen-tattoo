<?php 

//require_once initalisation bd etc.

require 'include/header.inc.php';

require 'include/menu.inc.php'; ?>

	<section id="content">
		<section id="shop" class="acc">
			<section class="title right">
				<h1>Shop</h1>
				<img src="images/arrow-right-1.png" alt="flèche décorative" class="arrow right" />
			</section>
			<a href="shop.php"><img src="images/shop.jpg" alt="shop" id="shop-img" class="content-img"/></a>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget finibus sem. Duis quis metus auctor lectus congue rhoncus et ac justo.</p>
		</section>
	
		<section id="realisations" class="acc">
			<section id="center">
				<h1>Réalisations</h1>
				<img src="images/arrow-bottom-2.png" alt="flèche décorative" />
			</section>
			<a href="book.php"><img src="images/real.jpg" alt="shop" id="real-img" class="content-img"/></a>
			<p id="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget finibus sem. Duis quis metus auctor lectus congue rhoncus et ac justo.</p>
		</section>
	
		<section id="artists" class="acc">
			<a href="artists.php"><img src="images/artist.jpg" alt="shop" id="artists-img" class="content-img"/></a>
			<section class="title left">
				<h1>Artistes</h1>
				<img src="images/arrow-left-4.png" alt="flèche décorative" class="arrow left" />
			</section>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget finibus sem. Duis quis metus auctor lectus congue rhoncus et ac justo.</p>
		</section>
	</section>

<?php include 'include/footer.inc.php'; ?>
