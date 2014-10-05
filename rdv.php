<?php 

//require_once initalisation bd etc.

require 'include/header.inc.php';

require 'include/menu.inc.php';

require 'include/db.php';

?> 

<section id="infos_msg" class="background">
 	<?php liste_msg(); ?>
</section>
<section id="display_msg" class="background">
	<?php show_msg(); ?>
</section>

<?php

function liste_msg(){

	$db=dbconnect();
	$query= "SELECT * FROM `rdv` ORDER BY rdv.id_rdv ASC";
	$result = mysqli_query($db, $query) or die ('Erreur SQL !<br>'.$query.'<br>'. mysql_error());

	echo "<nav id='title_msg'><span>Date</span><span>Nom</span><span>Sujet</span><span>Voir</span><span>Effacer</span></nav>";

	while($data= mysqli_fetch_assoc($result)){
		$name=$data["client_name"];
		$subject=$data["subject"];
		echo "<ol>";
		echo "<li>";
		echo "<span>". date("j/n/y") ."</span><span>". ucfirst($name) ."</span><span>". ucfirst($subject) ."</span>";
		echo "<span><a href=\"rdv.php?id_rdv=".$data['id_rdv']."\">+</a></span>";
		echo "<span><a href=\"delete_rdv.php?id_rdv=".$data['id_rdv']."\">x</a></span>";
		echo "</li>";
		echo "</ol>";	
	}
	
	mysqli_close($db);

}

function show_msg(){
	
	$db=dbconnect();
	$id = mysqli_real_escape_string($db, $_GET['id_rdv']);

	$query= "SELECT * FROM `rdv` ORDER BY id_rdv='".$id."'";
	$result = mysqli_query($db, $query);
	
	$data= mysqli_fetch_assoc($result);
	$name=$data["client_name"];
	$mail=$data["mail"];
	$msg=$data["message"];
	echo "<h1><span>De:".$name."</span><span>--Mail:".$mail."</h1>";
	echo "<span>".$msg."".$id."</span>";
	
	mysqli_close($db);
	
}

include 'include/footer.inc.php'; 

?>
