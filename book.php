<?php 

require_once 'include/db.php';

require 'include/header.inc.php';

require 'include/menu.inc.php'; ?>
	<section id="book">
			<section id="menu-book" class="background">
				<nav>
					<h1>Artistes</h1>
					<ul>
						<li><a href="#" onclick="select_img('tous')">Tous</a></li>
						<li><a href="#" onclick="select_img('mathieu')">Mathieu</a></li>
						<li><a href="#" onclick="select_img('guillaume')">Guillaume</a></li>
					</ul>
				</nav>
				<nav>
					<h1>Tags</h1>
					<ul>
						<li><a href="#" onclick="select_img('tous')">Tous</a></li>
						<li><a href="#" onclick="select_img('ailes')">Ailes</a></li>
						<li><a href="#" onclick="select_img('animal')">Animal</a></li>
						<li><a href="#" onclick="select_img('caligraphie')">Caligraphie</a></li>
						<li><a href="#" onclick="select_img('dragon')">Dragon</a></li>
						<li><a href="#" onclick="select_img('etoile')">Étoile</a></li>
						<li><a href="#" onclick="select_img('fleur')">Fleur</a></li>
						<li><a href="#" onclick="select_img('tribal')">Tribal</a></li>
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
					$query= "SELECT * FROM `image` ORDER BY `image`.`id` DESC "; //sélection de toutes les entrées de la table image
					$result = mysqli_query($db, $query) or die('Erreur SQL !<br>'.$req.'<br>'. mysql_error());
					while($image=mysqli_fetch_assoc($result)){

						$tags=$image["tags"]; //récupération de la liste de tags séparés par une virgule
						$tags_array=explode($delimiter,$tags); //récupération de chaque tag séparément dans un tableau
						$class_tags="";
						foreach($tags_array as $tag){
							$class_tags=$class_tags." ".$tag;
						}
						$artist=$image["artiste"];
						$class_tags=$class_tags." ".$artist;
						$nom=$image["nom"];
						$output= $output.'<section class="photos'.$class_tags.'"><p><a class="fancybox" href="images/tattoos/'.$image["nom_fichier"].'" ><img src="images/tattoos/'.$image["nom_fichier"].'" alt="Photo de tatouage." /></a></p></section>';
					}
					mysqli_close($db);
					return $output;
				}
				

				//fonction de récupération de la liste des tags présents dans la BD
				function pick_tags(){
					$tag_list = array("Tous");
					$delimiter=",";
					$output="";
					$db=dbconnect();
					$query= "SELECT `image`.`tags` FROM `image` "; //sélection de tous les tags de la table image
					$result = mysqli_query($db, $query) or die('Erreur SQL !<br>'.$req.'<br>'. mysql_error());
					while($image=mysqli_fetch_assoc($result)){
						$tags=$image["tags"]; //récupération de la liste de tags séparés par une virgule
						$tags_array=explode($delimiter,$tags); //récupération de chaque tag séparément dans un tableau
						foreach($tag_array as $tag){
							echo $tag;
							array_push($tag_list, $tag);
						}
						/*$i=0;
						while($tag!=null){
							$tag=$tags_array[$i];
							$i++;
							echo $tag;
						}*/
					}
					/*
					**
					**	on supprime les doublons
					**
					*/
					foreach($tag_list as $tag){
						$output=$output.'<h1><a href="'.$tag.'" onclick="select_img("'.$tag.'")">'.$tag.'"</a></h1>';
					}
					mysqli_close($db);
					return $output;
				}

				//fonction permettant l'affichage des tatouages d'un artiste (gère la redirection depuis la page Artistes vers celle-ci
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
				//echo pick_tags();

				?>

			</section>
	</section>
	<script src="js/jquery-1.10.1.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/tag_selection.js"></script>
	<?php echo retrieve_artist(); ?>

<?php include 'include/footer.inc.php'; ?>
