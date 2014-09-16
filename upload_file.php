<?php 

//require_once initalisation bd etc.

require 'include/header.inc.php';

require 'include/menu.inc.php'; 

?>

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
	<fieldset>
			<label for="artiste">Artiste : </label>
			<select name="artiste">
				<option value="Mathieu">Mathieu</option>
				<option value="Guillaume">Guillaume</option>
			</select><br />
			<label for="image_tag">Tag : </label>
			<input type="text" name="image_tag" /><br />
			<label for="password">Mot de passe: </label>
			<input type="password" name="password" /><br />
			<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Envoyer le fichier :</label>
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
			<input name="img" type="file" id="fichier_a_uploader" />
			<input type="submit" name="submit" value="Uploader" />
	</fieldset>
</form>

<?php 
	
	define('TARGET', 'images/');
	define('MAX_SIZE', 1000000000);
	define('MAX_WIDTH', 20000);
	define('MAX_HEIGHT', 20000);
	define('PASS', '1');
	
	$tabExt = array('jpg','png','jpeg');
	$infosImg = array();

	$extension = "";
	$message = "";
	$nomImage = "";

	
	if( !is_dir(TARGET) ) {
		if( !mkdir(TARGET, 0755) ) {
			exit('Erreur : le répertoire cible ne peut-être créé ! Vérifiez que vous diposiez des droits suffisants pour le faire ou créez le 						manuellement !');
		}
	}
	
	if(!empty($_POST)){
		if(!empty($_FILES['img']['name']) && $_POST['password'] == PASS){
			// Recuperation de l'extension du fichier
			$extension = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
			// On verifie l'extension du fichier
			if(in_array(strtolower($extension),$tabExt)){
				// On recupere les dimensions du fichier
				$infosImg = getimagesize($_FILES['img']['tmp_name']);
				// On verifie le type de l'image
				if($infosImg[2] >= 1 && $infosImg[2] <= 14){
					// On verifie les dimensions et taille de l'image
					if(($infosImg[0] <= MAX_WIDTH) && ($infosImg[1] <= MAX_HEIGHT) && (filesize($_FILES['img']['tmp_name']) <= MAX_SIZE)) {
						// Parcours du tableau d'erreurs
						if(isset($_FILES['img']['error']) && UPLOAD_ERR_OK === $_FILES['img']['error']) {
							// On renomme le fichier
							$nomImage = md5(uniqid()) .'.'. $extension;
							// Si c'est OK, on teste l'upload
							if(move_uploaded_file($_FILES['img']['tmp_name'], TARGET.$nomImage)) {
								// On associe le tag de l'image à la bdd
								$message = 'Upload réussi !';
							} else {
								$message = "Un problème est survenu lors du chargement de l'image";	
							}
						} else {
							$message = "Une erreur interne a empêché le chargement de l'image !";	
						}
					} else {
						$message = "Erreur dans les dimensions de l'image !";	
					}
				} else {
					$message = "Le fichier chargé n'est pas une image !";
				}
			} else {
				$message = "L'extension du fichier est incorrect !";
			}
		} else {
			$message = "Le formulaire est vide ou  bien le mmot de passe est incorrect !";	
		}
	} 
	echo $message;

	
?>
</body>
</html>