<?php



$entreprises =[
	[
		'Nom de l\'entreprise',
		'subtitle business name',
		'subtitle 2',
		'adresse',
		'code postale',
		'ville',
		'numerotel',
		'mail',
		'status',
		'int(capital)',
		'int(rcs)',
		'rom',
		'lien vers site web',
		
	],
	[
		'OMNI CONSULTING',
		'Omni Webdev',
		'Pôle Région Innovation Nord Express - Studios Singuliers',
		'48 rue ....',
		'75 018',
		'Paris',
		'01 151 6 262',
		'contact@omni-dev.com',
		'SASU',
		20000,
		566151651,
		55464,
		'localhost/00IBAN/OmniDevStudio/'
		
	],
	[
		'Painted Happiness',
		'La peinture naturelle et créative',
		'Peinture et décoration',
		'48 rue ....',
		'75 018',
		'Paris',
		'01 151 6 262',
		'contact@paint-happiness.com',
		'SASU',
		20000,
		566151651,
		55464,
		'http://www.paint-happiness.com'
	],
	[
		'OVH',
		'Significatioon sigle',
		'désignation de l\'activité ?',
		'48 rue ....',
		'75 018',
		'Paris',
		'01 151 6 262',
		'contact@ovh.',
		'SASU',
		20000,
		566151651,
		55464,
		'ovh.com'
	]
];
	
$entreprise = $entreprises[$id]; ?>
<table>
	<tr>
		<td>
			<img src="img/logo/<?php $imgLogo = $id-1; echo $imgLogo; ?>.png" alt="logo <?php echo $entreprise[0]; ?>" style="float:left; margin-right: 10px">
		</td>
		<td style="padding-left: 45px;">
			<ul style="list-style-type:none;">
				<li>
					<a href="<?php echo $entreprise[12]; ?>">
						<h4><?php echo $entreprise[0]; ?></h4>
					</a>
				</li>
				<li>
					<h5><?php echo $entreprise[1]; ?></h5>
				</li>
				<li>
					<?php echo $entreprise[2]; ?>
				</li>
				<li class="icon-home">
					<?php echo $entreprise[3].' '.$entreprise[4].' '.$entreprise[5]; ?>
				</li>
				<li class="icon-phone">
					<?php echo $entreprise[6]; ?>
				</li>
				<li class="icon-envelope">
					<a href="mailto:<?php echo $entreprise[7]; ?>"><?php echo $entreprise[7]; ?></a>
				</li>
				<li class="icon-legal">
					<small>
						<?php echo $entreprise[8]; ?> 
						Capital <?php echo $entreprise[9]; ?>€
						RCS Paris RCS <?php echo $entreprise[10]; ?>
						ROM<?php echo $entreprise[11]; ?>
					</small>
				</li>
				<li class="icon-link">
					<a href="<?php echo $entreprise[12]; ?>">
						<?php echo $entreprise[12]; ?>
					</a>
				</li>
			</ul>
		</td>
	</tr>
</table>
