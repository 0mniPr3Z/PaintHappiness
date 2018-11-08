<?php
session_start();
//récupération de la SECT
if(isset($_GET['sect']) AND !empty($_GET['sect'])){
	$sect = htmlspecialchars($_GET['sect']);
} else{
	$sect = 0;
}
//récupération de la PGE
if(isset($_GET['pge']) AND !empty($_GET['pge']) AND !$_GET['pge'] == 0){
	$pge = htmlspecialchars($_GET['pge']);
}else{
	$pge=0;
}
//récupération de l'Id
if(isset($GET['id']) AND !empty($_GET['id'])){
	$id = intval(htmlspecialchars($_GET['id']));
}else{
	$id = 0;
}

$data_pge =[
	'',
	
	[
		'Painted Happiness','Le Bonheur de Peindre !',
			[
				[
					'À Propos','Qui sommes-nous ?'
				],
				[
					'Prestation','Que faisons nous ?'
				],
				[
					'Témoignages','Ce que nos clients disent'
				],
				[
					'Mentions Légales','À propos du site'
				]
			]
	],
	
	[
		'Services en ligne','A votre service !',
			[
				[
					'Devis en ligne','Décrivez-nous vos besoins.'
				],
				[
					'Prendre Rendez-Vous','Nous nous déplaçons pour vous conseiller.'
				]
			]
			
	],
	[
		'Réalisation','Inspiré par la nature...',
			[
				[
					'Effets de Peinture et d\'enduits','Sensibilité Artistique'
				],
				[
					'Nouveautés','A l\'affût des tendances'
				],
				[
					'Goûts Artistique', 'Références et inspirations'
				]
			]
			
			
	],
	[
		'Nous contacter','...Bonjour ! :)',
			[
				['','Contactez l\'équipe.']
			]
	]
];

$citations = [
	[
		'Peindre le bonheur, le contempler dès le levé du jour','Masra Noah Mégane'
	],
	[
		'Péter jusqu\'à plus soif et regarder le ciel fondre','Omniprez'
	]
	
];

$citation = $citations[rand(0,count($citations)-1)];
?>