<?php

//on verifi l'envoi
if( isset( $_GET['envoiReq'] ) ) {
	//======================================= NOM
	$champ = '<i>"NOM"</i>';
	
	
	// on verifi si nom est bien present
	if ( isset( $_GET['nom'] ) AND !empty($_GET['nom']) ) {
		
		$nom = htmlspecialchars($_GET['nom']);
		
		//format nom
		if (strlen($nom)<=60 AND strlen($nom)>= 3){
			if( preg_match ("/^[a-zéèàùûêâôë][a-zéèàùûêâôë(\n)(\r) \'-]*[a-zéèàùûêâôë]$/i", $nom) ){
				
				
				// EMAIL ============================================================
				$champ = '<i>"E-MAIL"</i>';
				
				if ( isset( $_GET['email']) AND !empty($_GET['email']) ){
					$mail = htmlspecialchars($_GET['email']);
					
					if ( preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $mail ) ){
						
						// TEL ============================================================
						$champ = '<i>"TELEPHONE"</i>';
						if ( isset( $_GET['tel']) AND !empty($_GET['tel']) ){
							$tel = htmlspecialchars($_GET['tel']);
							if ( ! (preg_match ( " /^(\d\d\s){4}(\d\d)$/ " , $tel) OR  preg_match ( " /^(\d\d){4}(\d\d)$/ " , $tel)) ){
								$msgfin = 5;
								$format = '01 23 45 56 78 ou 012345678'; 
							}
						}
						
						// OBJET ============================================================ -->
						if ( isset( $_GET['objet']) AND !empty($_GET['objet']) ){
							$obj = intval($_GET['objet']);
							if ($obj <=0 AND $obj>=7) {
								$obj = 0;
							}
						
						}else{
							$obj = 0;
						}
						
						// MESSAGE ============================================================ -->
						
						if ( isset( $_GET['txt']) AND !empty($_GET['txt']) ){
							
							$txt = htmlspecialchars($_GET['txt']);
							
							if (strlen($txt)<=300 AND strlen($txt)>= 3){
								
								if(!isset($tel)){
									$tel = 'pas de num';
								}
								
								envoiDuMail($nom, $mail, $tel, $obj, $txt);
								$msgfin =2;
								
								
							}else{
								$champ = '<i>"MESSAGE"</i>';
								$msgfin = 3;
								$nbr = 300;
							}
						
						}else{
							$msgfin = 1;
						}
						
					//
					
					}else{
						$msgfin = 5;
						$format = "nom@mail.com";
					}
					
				}else{
					$msgfin = 1;
				}
				
			}else{
				$msgfin = 4;
				
			}
		}else{
			$msgfin = 3;
			
			$nbr = 60;
			
		}
		
	}else{
		
		$msgfin = 1;
		
	}
	
}



function envoiDuMail($nom, $mail, $tel, $obj, $txt){
	$theme = [
	'Erreur sujet',
	'Demande de devis',
	'Demande anticipée pour projet de construction',
	'Suivi de Chantier',
	'Autres demandes...'
	];
	define('TO_EMAIL', 'noah.masra@gmail.com'); 
	define('FROM_EMAIL', $mail);  
	define('FROM_NAME', $nom);
	define( 'BODY', 
	
		'Vous avez un message du Site :<br />
		<fieldset>
			<legend> <h1>De '.$nom.' </h1></legend>
			<h2>'.$theme[$obj].'</h2>
			'.$txt.'<br /><br />
			<table style="border: solid black 1px"><tr><td>'.$tel.'</td><td>'.$mail.'</td></tr></table><br /><br />
		</fieldset>'

	
	);
	define( 'SUBJECT', 'Email de paintHappiness.fr : '.$obj ); 
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		$headers .= 'From: '.FROM_NAME.' <'.FROM_EMAIL.'>' . "\r\n";
	
	    mail( TO_EMAIL, SUBJECT, BODY, $headers );
		
	/*	
	$to      = $mail;
	$subject = $obj;
	$message = $txt;
	$headers = array(
		'From' => 'maspie.djiherm@gmail.com',
		'Reply-To' => 'maspie.djiherm@gmail.com',
		'X-Mailer' => 'PHP/' . phpversion()
	);

	mail($to, $subject, $message, $headers);*/
	
}


// verification de presence de message d'erreur
if( isset($msgfin) ){
	
	switch($msgfin){
		case 0 : // not send A MODIFIER
			/*$msgerr = '<p class="error">Envoi réussit. Nous vous repondront très bientôt !</p>';*/
		break;
		
		case 1: //erreur de chargement
			$msgerr ='<p class="error">Attention! Veuillez remplir correctement le champs '.$champ.'.</p>';
		break;
		
		case 2:
			$msgerr = '<p class="success">Envoi réussi. Nous vous repondront très bientôt !</p>';
		break;
		
		case 3: //erreur de chargement
			$msgerr ='<p class="error">Attention! Le champs '.$champ.' doit contenir entre 3 et '.$nbr.' caractères.</p>';
		break;
		
		case 4: //erreur de chargement 
 		$msgerr ='<p class="error">Attention! Le champs '.$champ.' ne doit contenir ni chiffres ni caratères spéciaux.</p>';
		break;
		
		case 5: //erreur de chargement
			$msgerr ='<p class="error">Attention! Le format de '.$champ.' n\'est pas valide (<i>'.$format.'<i>)<p>';
		break;
		
	
		default:
		break;		
	}
		
		
	$msgResult = '<div class="usermessage">'.$msgerr.'</div>';
}else{
	$msgResult = '';
}
?>