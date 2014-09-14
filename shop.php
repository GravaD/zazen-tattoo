<?php 

//require_once initalisation bd etc.

require 'include/header.inc.php';

require 'include/menu.inc.php'; ?>

	<section id="content-shop">
		<section id="caisse" onclick="popup()">
			<p>caisse</p>
		</section>
		<section id="atelier">
			<p>atelier</p>
		</section>
		<section id="entree">
			<p>entree</p>
		</section>
	</section>

	<script src="js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript">
		function popup(){
			$('section#caisse').css({'background-color':'red'});
			/*if($(this).css('display').is('none')){
				$(this).css({'display':'block'});
			}else{
				$(this).css({'display':'none'});
			}*/
			//$('section.photos').css({'display':'none'});
			//$('section.'+tag).css({'display':'block'});
		}		
	</script>

<?php include 'include/footer.inc.php'; ?>
