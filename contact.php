<?php 

//require_once initalisation bd etc.

require 'include/header.inc.php';

require 'include/menu.inc.php'; ?>

	<section id="contact-content" >
		<section class="background"><p id="contact-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget finibus sem. Duis quis metus auctor lectus congue rhoncus et ac justo. Ut auctor leo at eros sodales, id aliquet nisl molestie. Praesent luctus dictum est, eget pretium risus porta at. Donec nulla leo, lacinia non ligula vulputate, interdum pharetra orci. Donec id nulla dictum, lacinia sem sit amet, elementum felis. Aliquam sit amet sem nunc. Nulla facilisi. In magna libero, tincidunt quis tristique rutrum, feugiat ut odio. Praesent sed dignissim magna, ac feugiat nunc. Vivamus consectetur, urna sit amet sodales lobortis, eros sapien accumsan velit, sed finibus ante turpis quis tellus. Cras pharetra dictum sagittis. Duis pulvinar, nulla sed mollis consequat, augue justo mollis erat, ut volutpat enim urna quis urna. </p></section>
		<form method="get" action="#">
			<fieldset title="Contact">
				<label for="sujet">Sujet : </label><input type="text" name="sujet" id="sujet"/><br />
				<textarea placeholder="Ecrivez votre message..." cols="70" rows="10" id="message"></textarea><br />
				<p>Venez nous voir :</p><br />
				<select name="jour">
				<?php
					echo jours();
				?>
				</select>
				<select name="heure">
					<?php
						for($i = 13; $i < 20; $i++){
							echo "<option value=\".$i.\">$i h 00</option>";
						}
					?>
				</select><br />
				<input type="submit" name="valider" value="Valider" />
			</fieldset>
		</form>
	</section>

	<?php

		function jours(){
			$jours = array ("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
			$output="";
			$jour=date("w");
			if($jour==0 || $jour==6){
				$prem=2;
			}else{
				$prem=$jour+1;
			}
			for($i=0;$i<7;$i++){
				if(!($prem==0) && !($prem==6)){
					$output=$output.'<option value="'.$jours[$prem].'">'.$jours[$prem].'</option>';
				}
				$prem++;
				$prem=$prem%7;
			}
			return $output;
		}
	
	?>

<?php include 'include/footer.inc.php'; ?>
