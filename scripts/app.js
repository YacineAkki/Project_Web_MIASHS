$(document).ready(function(){

	$('.toggle').click(function(e){
		e.preventDefault();
		$('.top-menu-nav').toggleClass('isopen');
		$('.toggle').toggleClass('isopen');
	});
}
);
