<?php
//LE MESSAGE
define('TO_EMAIL', 'noah.masra@gmail.com'); 
define('FROM_EMAIL', 'hernandezpa@live.fr');  
define('FROM_NAME', 'Alerte : Formulaire de contact');
define( 'BODY', '%message%<br /><br /><small>email inviata da %name%, email %email%.</small>' );
define( 'SUBJECT', 'Email from yoursite.com' );      

//Message retourné
$msg = [
	'<p class="error">Attention!remplissez correctement les champs indiqués en rouge.</p>',
    '<p class="success">Envoi réussit. Nous vous repondront très bientôt !</p>',
    '<p class="error">Une erreur s\'est produite. Veuillez réessayer.</p>'
];      
                     
//Reception de mail


function sendemail() 
{                                
    global $msg, $required;
    
    if ( isset( $_POST['ajax'] ) )
        $ajax = $_POST['ajax'];
    else
        $ajax = false;
    
	if ( isset( $_POST['yit_action'] ) AND $_POST['yit_action'] == 'sendmail' ) 
	{
	                                
	    $body = BODY;
	    
	    $post_data = array_map( 'stripslashes', $_POST );
	    
// 	    print_r($post_data);
// 	    die;
	    
	    foreach ( $required as $id_field ) {
            if( $post_data[$id_field] == '' || is_null( $post_data[$id_field] ) ) {
    	        if ( $ajax )
    	           end_ajax( $msg['error'] );
    	        else
    	    	   redirect( 'index.php?pge=1' );
    	    }                       
    	}
	    
	    if( !is_email( $post_data['email'] ) OR $post_data['email'] == '' ) 
	        if ( $ajax )
	           end_ajax( $msg['error'] );
	        else
    	       redirect( 'index.php?pge=1'  );
	      
	    foreach( $post_data as $id => $var )
	    {
	    	if( $id == 'message' ) $var = nl2br($var);
			$body = str_replace( "%$id%", $var, $body );	
		}
			    
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		$headers .= 'From: '.FROM_NAME.' <'.FROM_EMAIL.'>' . "\r\n" . 'Reply-To: ' . $post_data['email'];
	
	    $sendmail = mail( TO_EMAIL, SUBJECT, $body, $headers );
	         
		if ( $sendmail ) {
    	       redirect( 'index.php?pge=1' );
	    } else {
    	       redirect( 'index.php?pge=1' );
		}
	} 
}

function is_email($email) 
{
    if (!preg_match("/[a-z0-9][_.a-z0-9-]+@([a-z0-9][0-9a-z-]+.)+([a-z]{2,4})/" , $email))
    {
        return false;
    }
    else
    {
        return true;
    }
}             

function end_ajax( $msg = '' ) {
    echo $msg;
    die;
}           

function redirect( $redirect = '' ) {
    header( 'Location: ../' . $redirect );
    die;
}      

?>
