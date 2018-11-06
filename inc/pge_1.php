<div id="primary" class="sidebar-left">
	<div class="inner group">
	
	
		<!-- START CONTENT -->
		<div id="content-page" class="content group">
			<div class="hentry group">
				<?php include'inc/'.$pge.'_'.$sect.'.php'; ?>
			</div>
			<!-- START COMMENTS -->
			<div id="comments">
			</div>
			<!-- END COMMENTS -->
			
		</div>
		<!-- END CONTENT -->
		
		<!-- START SIDEBAR -->
		<div class="sidebar group">
			
			<div class="widget-first widget recent-posts">
			
				<h3><?php echo $data_pge[$pge][0]; ?></h3>
				<div class="recent-post group">
					
					<?php for( $i=0; $i< count($data_pge[$pge][2]); $i++ ){ ?>
							
						<div class="hentry-post group">
							<!-- IMAGE -->
							<div class="thumb-img">
								<img src="img/thumb/<?php echo $pge.'_'.$i?>.png" alt="" title="<?php echo $data_pge[$pge][2][$i][0];?>" />
							</div>
							
							<!-- IMAGE -->
							<div class="text">
								<a
									href="index.php?pge=<?php echo $pge ?>&sect=<?php echo $i ?>"
									title="Section shortcodes &amp; sticky posts!"
									class="title">
									
									<?php echo $data_pge[$pge][2][$i][0];?>
								</a>
								<p class="post-date"><?php echo $data_pge[$pge][2][$i][1];?></p>
							</div>
						</div>
						
					<?php } ?>
					
					
				</div>
			</div>
			<?php echo(include'inc/brik/hotline.php'); ?>
		</div>
		<!-- END SIDEBAR -->
		
		
		
		<!-- START EXTRA CONTENT -->
		<!-- END EXTRA CONTENT -->
	</div>
</div>