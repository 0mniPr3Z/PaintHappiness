<div class="menu classic">
	<ul id="nav" class="menu">
		<?php
		
		for($i=1; $i< count($data_pge); $i++){
			echo'	<li><a href="index.php?pge='.$i.'">'.$data_pge[$i][0].'</a>';
			if (count($data_pge[$i][2]) >1){
				echo '<ul class="sub-menu">';
				for($j=0; $j< count($data_pge[$i][2]); $j++){
					echo '<li><a href="index.php?pge='.$i.'&sect='.$j.'">'.$data_pge[$i][2][$j][0].'</a></li>';
				}
				echo'</ul>';
			}
			echo'</li>';
		}
		?>
	</ul>
</div>