<?php

if($pge==0){
	include'inc/home.php';
}else{
	include'inc/meta.php';
	include'inc/pge_'.$pge.'.php';
}
	
	


?>