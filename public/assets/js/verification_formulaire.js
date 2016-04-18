$(document).ready(function(){
	// Mise en évidence des champs de formulaire non remplie :
	function markerInputForm(champ, erreur) {
		if (erreur){
			champ.css('background-color','rgba(0, 0, 0, .4)');
		} else{
			champ.css('background-color','inherit');
		}
	}

	function checkPseudo(champ)
	{
		if(champ.value.length >= 2)
		{
			markerInputForm(champ, false);
			return true;
		}
		else
		{
			markerInputForm(champ, true);
			return false;
		}
	}

	function checkEmail(champ) {
		var reEmail = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
		if (reEmail.test(champ.value)){
			markerInputForm(champ, false);
			return true;
		} else{
			markerInputForm(champ, true);
			return false;
		}
	}

	function checkPassword(champ){
		if (champ.value.length >= 2){
			markerInputForm(champ, false);
			return true;
		} else{
			markerInputForm(champ, true);
			return false;
		}
	}

});