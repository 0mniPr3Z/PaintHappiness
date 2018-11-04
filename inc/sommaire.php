<div id="primary" class="sidebar-left">
	<div class="inner group">
	
	
		<!-- START CONTENT -->
		<div id="content-page" class="content group">
			<div class="hentry group">
				<?php echo $textSect[$sect];?>
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
			
				<h3><?php echo $sectionName; ?></h3>
				<div class="recent-post group">
					
					<?php for( $i=0; $i< $nbrRubr; $i++ ){ ?>
							
						<div class="hentry-post group">
							<!-- IMAGE -->
							<div class="thumb-img">
								<img src="img/thumb/<?php echo $imgRubr[$i];?>.png" alt="" title="<?php echo $titleRubr[$i];?>" />
							</div>
							
							<!-- IMAGE -->
							<div class="text">
								<a
									href="index.php?pge=2&sect=<?php echo $i ?>"
									title="Section shortcodes &amp; sticky posts!"
									class="title">
									
									<?php echo $titleRubr[$i];?>
								</a>
								<p class="post-date"><?php echo $msgRubr[$i];?></p>
							</div>
						</div>
						
					<?php } ?>
					
					
				</div>
			</div>
			<?php include'inc/hotline.php'; ?>
		</div>
		<!-- END SIDEBAR -->
		
		
		
		<!-- START EXTRA CONTENT -->
		<!-- END EXTRA CONTENT -->
	</div>
</div>