<div class="menu classic">
	<ul id="nav" class="menu">
		<?php
		//pour chaque page
		for($i=1; $i< count($data_pge); $i++){
			echo'<li><a href="index.php?pge='.$i.'" >';//lien
						
			if($pge == $i){
				echo' ~ ';
			};
			
			echo $data_pge[$i][0];
			if($pge == $i){
				echo' ~ ';
			};
			echo'</a>';
			
			//pour chaque page
			if (count($data_pge[$i][2]) >1){
				
				echo '<ul class="sub-menu">';
				
				for($j=0; $j< count($data_pge[$i][2]); $j++){
					
					echo '<li><a href="index.php?pge='.$i.'&sect='.$j.'">';
					
					if($pge == $i AND $sect == $j){
						echo' ~ ';
					};
					
					
					echo $data_pge[$i][2][$j][0];
					if($pge == $i AND $sect==$j){
						echo' ~ ';
					};
					echo'</a></li>';
				}
				echo'</ul>';
			}
			echo'</li>';
		}
		?>
	</ul>
</div>