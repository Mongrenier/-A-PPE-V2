function Verification(){
	var fields = $('input');
  var expressionReguliere = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
  var expressionprix = /[(0-9)+.?(0-9)*]+/;
	var error_msg = $('p');
	/* Les var x permettent de prendre toute les erreurs dans un bool */
	var x1 = true;
	var x2 = true;
	var x3 = true;
	var x4 = true;
	var x5 = true;
	var x6 = true;
	var x7 = true;
		/* Enleve tout les messages d'erreur corrigé lorque l'utilisateur appuie sur Entrée */
		error_msg[0].style.display = 'none';
		error_msg[1].style.display = 'none';
		error_msg[2].style.display = 'none';
		error_msg[3].style.display = 'none';
		error_msg[4].style.display = 'none';
	/* Permet de vérifier chaque champ input et de récuperer les erreurs */
	if (fields[2].value.length < 3) {
		x1 = false;
	}
	if (fields[3].value.length < 3) {
		x2 = false;
	}
	if (fields[4].value.length < 3) {
		x3 = false;
	}
	if (fields[5].value.length < 3) {
		x4 = false;
	}
	if (expressionprix.test(fields[6].value) == false){
		x5 = false
	}
	if (fields[7].value.length < 1) {
		x6 = false;
	}
	if (fields[8].value.length < 1) {
		x7 = false;
	}
	/* verifie si il y a une variable X sur false */
	if (x1 == false || x2 == false || x3 == false || x4 == false || x5 == false || x6 == false || x7 == false){
		/* si une variable contient false, signifie qu'il contient une erreur */
		if (x1 == false){
			/* affiche le message d'erreur */
			error_msg[0].style.display = 'block';
		}
		if (x2 == false){
			error_msg[1].style.display = 'block';
		}
		if (x3 == false){
			error_msg[1].style.display = 'block';
		}
		if (x4 == false){
			error_msg[1].style.display = 'block';
		}
		if (x5 == false){
			error_msg[2].style.display = 'block';
		}
		if (x6 == false){
			error_msg[3].style.display = 'inline';
		}
		if (x7 == false){
			error_msg[4].style.display = 'inline';
		}
		return false;
	}
	
	return true;
}
function Modification_information(){
	var fields = $('input');
  var expressionReguliere = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
  var expressionprix = /[(0-9)+.?(0-9)*]+/;
	var error_msg = $('p');
	/* Les var x permettent de prendre toute les erreurs dans un bool */
	var x1 = true;
	var x2 = true;
	var x3 = true;
	var x4 = true;
	var x5 = true;
		/* Enleve tout les messages d'erreur corrigé lorque l'utilisateur appuie sur Entrée */
		error_msg[0].style.display = 'none';
		error_msg[1].style.display = 'none';
		error_msg[2].style.display = 'none';
		error_msg[3].style.display = 'none';
		error_msg[4].style.display = 'none';




		if (fields[2].value.length < 3) {
			x1 = false;
		}
		if (fields[3].value.length < 3) {
			x2 = false;
		}
		if (expressionReguliere.test(fields[4].value) == false){
			x3 = false
		}
		if (fields[5].value.length < 3) {
			x4 = false;
		}
		if (fields[6].value != fields[5].value || fields[5].value.length === 0) {
			x5 = false;
		}



		if (x1 == false || x2 == false || x3 == false || x4 == false || x5 == false){
			/* si une variable contient false, signifie qu'il contient une erreur */
			if (x1 == false){
				/* affiche le message d'erreur */
				error_msg[0].style.display = 'block';
			}
			if (x2 == false){
				error_msg[1].style.display = 'block';
			}
			if (x3 == false){
				error_msg[2].style.display = 'block';
			}
			if (x4 == false){
				error_msg[3].style.display = 'block';
			}
			if (x5 == false){
				error_msg[4].style.display = 'block';
			}
			return false;
		}
	return true;
}





/* Code de récup */

/*
function Verification(){
	var fields = $('input');
  var expressionReguliere = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
  var expressionprix = /[(0-9)+.?(0-9)*]+/;
	var error_msg = $('p');
	var x1 = true;
	var x2 = true;
	var x3 = true;
	var x4 = true;

		error_msg[0].style.display = 'none';
		error_msg[1].style.display = 'none';
		error_msg[2].style.display = 'none';
		error_msg[3].style.display = 'none';
		error_msg[4].style.display = 'none';

	if (fields[2].value.length < 3) {
		error_msg[0].style.display = 'block';
		return false;
	}
	if (fields[3].value.length < 3) {
		error_msg[1].style.display = 'block';
		return false;
	}
	if (fields[4].value.length < 3) {
		error_msg[1].style.display = 'block';
		return false;
	}
	if (fields[5].value.length < 3) {
		error_msg[1].style.display = 'block';
		return false;
	}
	if (expressionprix.test(fields[6].value) == false){
		error_msg[2].style.display = 'block';
		return false
	}

	if (fields[7].value.length < 1) {
		error_msg[3].style.display = 'block';
		return false;
	}
	if (fields[8].value.length < 1) {
		error_msg[4].style.display = 'block';
		return false;
	}
	
	return true;
}
*/






	/*
	if (expressionReguliere.test(fields[5].value) == false) {
		error_msg[3].style.display = 'block';
		return false;
	}
	if (fields[6].value.length < 6 || fields[7].value != fields[6].value || fields[6].value.includes(fields[3].value) || fields[6].value.includes(fields[2].value)) {
		error_msg[4].style.display = 'block';
		error_msg[5].style.display = 'block';
		return false;
	}*/