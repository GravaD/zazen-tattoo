<?php 

require_once 'include/db.php';

require 'include/header.inc.php';

require 'include/menu.inc.php'; ?>
	<section id="book">
			<section id="menu-book" class="background">
				<nav>
					<h1>Artistes</h1>
					<ul>
						<li><a onclick="select_img('tous')">Tous</a></li>
						<?php echo pick_artists(); ?>
					</ul>
				</nav>
				<nav>
					<h1>Tags</h1>
					<ul>
						<li><a onclick="select_img('tous')">Tous</a></li>
						<?php echo pick_tags(); ?>
					</ul>
				</nav>
			</section>
			<section id="book-photos" class="background">
				<?php

				function sample(){
					//génération d'images par boucle pour avoir un modèle graphique

					//artiste : guillaume, tags : ailes
					for($i=1;$i<10;$i++){
						echo '
					<section class="photos guillaume ailes">
						<p><a class="fancybox" href="images/tattoos/'.$i.'.jpg" ><img src="images/tattoos/'.$i.'.jpg" alt="tatouage" /></a></p>
						<h1>Image '.$i.'</h1>
					</section>';
					}

					//artiste : guillaume, tags : ailes, animal
					for($i=10;$i<16;$i++){
						echo '
					<section class="photos guillaume ailes animal">
						<p><a class="fancybox" href="images/tattoos/'.$i.'.jpg" ><img src="images/tattoos/'.$i.'.jpg" alt="tatouage" /></a></p>
						<h1>Image '.$i.'</h1>
					</section>';
					}

					//artiste : guillaume, tags : animal
					for($i=10;$i<16;$i++){
						echo '
					<section class="photos guillaume animal">
						<p><a class="fancybox" href="images/tattoos/'.$i.'.jpg" ><img src="images/tattoos/'.$i.'.jpg" alt="tatouage" /></a></p>
						<h1>Image '.$i.'</h1>
					</section>';
					}

					//artiste : mathieu, tags : dragon
					for($i=16;$i<22;$i++){
						echo '
					<section class="photos mathieu dragon">
						<p><a class="fancybox" href="images/tattoos/'.$i.'.jpg" ><img src="images/tattoos/'.$i.'.jpg" alt="tatouage" /></a></p>
						<h1>Image '.$i.'</h1>
					</section>';
					}
				}
				
				//fonction de récupération des images de la BD
				function pick_images(){
					$delimiter=",";
					$output="";
					$db=dbconnect();
					$query= "SELECT * FROM `image` ORDER BY `id_img` DESC ";
					$result = mysqli_query($db, $query) or die('Erreur SQL !<br>'.$req.'<br>'. mysql_error());
					while($image=mysqli_fetch_assoc($result)){
						$nom_fic=$image["id_img"]."jpg";
						$output= $output.'<section class="photos"><p><a class="fancybox" href="images/tattoos/'.$nom_fic.'" ><img src="images/tattoos/'.$nom_fic.'" alt="Photo de tatouage." /></a></p></section>';
					}
					mysqli_close($db);
					return $output;
				}

				//fonction de récupération de la liste des artistes répertoriés
				function pick_artists(){
					$output="";
					$db=dbconnect();
					$query= "SELECT * FROM `artiste` ";
					$result = mysqli_query($db, $query) or die('Erreur SQL !<br>'.$req.'<br>'. mysql_error());
					while($artiste=mysqli_fetch_assoc($result)){
						$nom=$artiste["nom_art"];
						$output=$output.'<li><a onclick="select_img(\''.strtolower($nom).'\')">'.ucfirst($nom).'</a></li>';
					}
					mysqli_close($db);
					return $output;
				}				

				//fonction de récupération de la liste des tags présents dans la BD
				function pick_tags(){
					$output="";
					$db=dbconnect();
					$query= "SELECT * FROM `tag` "; //sélection de tous les tags de la table image
					$result = mysqli_query($db, $query) or die('Erreur SQL !<br>'.$req.'<br>'. mysql_error());
					while($tag=mysqli_fetch_assoc($result)){
						$nom=$tag["nom_tag"]; //récupération de la liste de tags séparés par une virgule
						$output=$output.'<li><a onclick="select_img(\''.strtolower($nom).'\')">'.ucfirst($nom).'</a></li>';
					}
					mysqli_close($db);
					return $output;
				}

				//fonction permettant l'affichage des tatouages d'un artiste (gère la redirection depuis la page Artistes vers celle-ci)
				function retrieve_artist(){
					$artist = $_GET["artist"];
					if($artist==""){
						$output = '<script type="text/javascript"> select_img("tous");</script>';
					}else{
						$output = '<script type="text/javascript"> select_img("'.$artist.'");</script>';
					}
					echo $output;
				}


				sample();
				//echo pick_images();

				?>

			</section>
	</section>
	<script src="js/jquery-1.10.1.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/tag_selection.js"></script>
	<?php echo retrieve_artist(); ?>

<?php include 'include/footer.inc.php'; ?>
