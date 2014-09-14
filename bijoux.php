<?php 

//require_once initalisation bd etc.

require 'include/header.inc.php';

require 'include/menu.inc.php'; ?>

	<section id="book">
			<section id="menu-book" class="background">
				<nav>
					<h1>Tags</h1>
					<ul>
						<li><a href="#">Coeur</a></li>
						<li><a href="#">Croix</a></li>
						<li><a href="#">Tribal</a></li>
					</ul>
				</nav>
			</section>
			<section id="book-photos" class="background">
				<?php
				for($i=1;$i<12;$i++){
					echo '
					<section class="photos">
						<p><a class="fancybox" href="images/products/'.$i.'.jpg" ><img src="images/products/'.$i.'.jpg" alt="bijiou" /></a></p>
						<h1>Image '.$i.'</h1>
					</section>';
				}
				?>

			</section>
	</section>

	<script src="js/jquery-1.10.1.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/tag_selection.js"></script>

<?php include 'include/footer.inc.php'; ?>
