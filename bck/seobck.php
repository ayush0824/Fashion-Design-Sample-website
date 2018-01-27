<div class="midhseo"> <!--midhseo-->
				
				<?php
					while($fetchseo=mysqli_fetch_array($exeseo, MYSQLI_ASSOC)){
				?>
				
				<div class="midseohead"><?php echo $fetchseo['stitle']; ?></div>
					<div class="midseomatter">
						<div class="midseoimg"><img src="seo_image/<?php echo $fetchseo['simg']; ?>" width="100%" height="100%"></div>
		                <div class="midseoright"><?php echo $fetchseo['sdescr']; ?></div>
	        		</div>
	        	</div>

	        	<?php
				}
				?>
				
        		<div style="clear: both;"></div>
	        </div> <!--/midhseo-->