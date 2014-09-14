<?php 

//require_once initalisation bd etc.

require 'include/header.inc.php';

require 'include/menu.inc.php'; ?>

	<section id="content-fiche">
		<section class="fiche background">
				<h1>Mathieu</h1>
				<section class="photo-fiche background">
					<img src="images/shop.jpg" alt="photo" />
				</section>
				<section class="liens-fiche">
				<ul>	
					<li><a href=""><img src="images/book-small.png" alt="logo décoratif" /> Télécharger le CV</a></li>
					<li><a href="book.php?artist=mathieu"><img src="images/graduation-cap-small.png" alt="logo décoratif" /> Voir le book</a></li>
				</ul>
				</section>
			<section class="text-fiche">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget finibus sem. Duis quis metus auctor lectus congue rhoncus et ac justo. Ut auctor leo at eros sodales, id aliquet nisl molestie.</p>
			</section>
		</section>

		<section class="fiche background">
				<h1>Guillaume</h1>
				<section class="photo-fiche background">
					<img src="images/shop.jpg" alt="photo" />
				</section>
				<section class="liens-fiche">
				<ul>	
					<li><a href=""><img src="images/book-small.png" alt="logo décoratif" /> Télécharger le CV</a></li>
					<li><a href="book.php?artist=guillaume"><img src="images/graduation-cap-small.png" alt="logo décoratif" /> Voir le book</a></li>
				</ul>
				</section>
			<section class="text-fiche">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget finibus sem. Duis quis metus auctor lectus congue rhoncus et ac justo. Ut auctor leo at eros sodales, id aliquet nisl molestie.</p>
			</section>
		</section>
	
	</section>

<?php include 'include/footer.inc.php'; ?>
