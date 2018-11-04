<?php

//DATABASE

$nom=[];

$title1=[
	'',
	'...Bonjour ! :)',
	'...Peindre le bonheur...'
];

$title2=[
	'',
	'Contactez l\'équipe.',
	'Qui sommes nous ?'
];
$data=[
	$nom,
	$title1,
	$title2
];

//ROOTER
//SECTION

if(isset($_GET['sect']) AND !empty($_GET['sect'])){
	$sect = htmlspecialchars($_GET['sect']);
} else{
	$sect = 0;
}
if(isset($_GET['pge'])){
	$pge = htmlspecialchars($_GET['pge']);
	include'inc/meta.php';
	switch($pge){
		case 1 :
			include'inc/contact.php';
		break;
		case 2 :
			include'inc/sommairePaint.php';

		break;
		default:
		//mettre 404
			include'inc/home.php';
		break;
	}
	
	
}else{
	include'inc/home.php';
}



?>