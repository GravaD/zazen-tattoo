function select_img(tag){
	if(tag=='tous'){
		$('section.photos').css({'display':'block'});
	}else{
		$('section.photos').css({'display':'none'});
		$('section.'+tag).css({'display':'block'});
	}
}

//ajouter la mise en évidence du tag sélectionné

		//exemple:
		//$('#trigger-gothique').click(function(){
		//	$('img.pic').not('.gothique').fadeOut();
		//});