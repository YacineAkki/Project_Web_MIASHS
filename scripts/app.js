$(document).ready(function(){

	$('.toggle').click(function(e){
		e.preventDefault();
		$('.top-menu-nav').toggleClass('isopen');
		$('.toggle').toggleClass('isopen');
	});
}
);


function overParagraphe (e){
var grand = document.getElementById(e);
grand.style = "width: 300px; height:300px;";
}

function outParagraphe (i){
var petit = document.getElementById(i);
petit.style= "width: 150px; height:150px;";	
}