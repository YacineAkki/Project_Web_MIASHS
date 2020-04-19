/* fonction s'execute quand evenement declenché */
$(document).ready(function(){
	$('#search').keyup(function(){
		var search=$(this).val();
		search=$.trim(search);
		
		/* si la recherche n'est pas vide : */
		if(search!=""){
			/* je fais apparaitre mon image chargement,je fais apparaitre la fonction de post.ph, je cache l'image de chargement quand la liste(requette) apparait */
			$('#loader').show();
			$.post('post.php',{search:search},function(data){
			
			$('#resultat ul').html(data).show();
			
			$('#loader').hide();
			
			
			//si on clique sur le plat proposé 
			$('a').click(function(){
				
				var lien=$(this).text();
				
				$('#loader').show();
				
				/* affichage de show.php, c'est à dire resultat requette dans platboisson du lien(plat)  sur lequel on a cliqué */
				/* disparition du gif chargement et de la liste  */
				$.post('show.php',{lien:lien},function(data){
					
					$('#feedback').html(data);
					
					$('#loader').hide();
					
					$('#resultat ul').hide();
					
				});
				
				
				
				
			});
			
			
			
			})		
		}
			
		
	});
	
});