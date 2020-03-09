$('.toggle').click(function(e){
	e.preventDefault();
	$('.navbox').toggleClass('is-open'); //toggle comme ça quand on click ça modifie la régle de translation du navbox et quand on reclik ça l'enleve
	$('.toggle').toggleClass('is-open');
});