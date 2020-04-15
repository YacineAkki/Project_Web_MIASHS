<?php
function creationPanier(){
	if(!isset($_SESSION['panier'])){
		
		$_SESSION['panier']=array();
		$_SESSION['panier']['nomPlat']=array();
		$_SESSION['panier']['idP']=array();
		$_SESSION['panier']['calPlat']=array();
		$_SESSION['panier']['quantPlat']=array();
		
		
		
	}
	return true;
}





function ajouterPlat($nomPlat,$quantPlat,$calPlat){
	
	if(creationPanier() ){
		
		$position_plat = array_search($nomPlat,$_SESSION['panier']['nomPlat']);
		
		if($position_plat !==false){
			
			$_SESSION['panier']['nomPlat'][$position_plat]+=$quantPlat;
		
		}else{
			
			array_push($_SESSION['panier']['nomPlat'],$nomPlat);
			array_push($_SESSION['panier']['quantPlat'],$quantPlat);
			array_push($_SESSION['panier']['calPlat'],$calPlat);
		}
		
		
		
	}else{
		echo 'erreur';
	}
	
}





function modifierQuantPlat($nomPlat,$quantPlat){
	
	if(creationPanier()){
		
		if($quantPlat>0){
			
			$position_produit= array_search($_SESSION['panier']['nomPlat'],$nomPlat);
			
			if($position_produit!== false){
				$_SESSION['panier']['nomPlat'][$position_produit]=$quantPlat;
			}
			
		}else{
			
			supprimerPlat($nomPlat);
		}
		
	}else{
		
		echo 'erreur2';
		
	}
	
	
}





function supprimerPlat($nomPlat){
	
	if(creationPanier()){
		
		$tmp= array();
		$tmp['nomPlat'] = array();
		$tmp['quantPlat'] = array();
		$tmp['calPlat'] = array();
		
		for($i=0; $i<count($_SESSION['panier']['nomPlat']);$i++){
			
			if($_SESSION['panier']['nomPlat'][$i]!== $nomPlat){
				
			array_push($_SESSION['panier']['nomPlat'],$_SESSION['panier']['nomPlat'][$i]);
			array_push($_SESSION['panier']['quantPlat'],$_SESSION['panier']['quantPlat'][$i]);
			array_push($_SESSION['panier']['calPlat'],$_SESSION['panier']['calPlat'][$i]);
				
		}
		}
		
		$_SESSION['panier']=$tmp;
		unset($tmp);
		
	}else{
		
		echo 'erreur3';
	}
	
	}
	
	
	
	
	
	function compterPlat(){
		
		if(isset($_SESSION['panier'])){
			
			return count($_SESSION['panier']['nomPlat']);
			
		}
	}
	
	
	
	function supprimerPanier(){
		
		
			
			unset($_SESSION['panier']);
		
		
	}
	
	
	function calPanier (){
		
		$calPanier=0;
		
		for($i=0; $i<count($_SESSION['panier']['nomPlat']);$i++){
		
		$calPanier += $_SESSION['panier']['quantPlat'][$i]*$_SESSION['panier']['calPlat'][$i];
			
			
		}
		
		return $calPanier;
		
		
		
		
	}
	
	
	

?>