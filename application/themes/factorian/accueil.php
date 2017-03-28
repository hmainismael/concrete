<?php $view->inc('elements/header.php'); ?>   
    <div class="row" style="margin-right:0px;">
    	<div class="col-md-12" style="padding-right:0px">
    	   	<?php
    	   		$a = new Area('diaporama');
    	   		$a->display($c);
    	   	?>
    	  </div>
    </div>

    <div class="container" style="margin-top:20px">
	    <div class="row" style="margin-right:0px">
	    	<div class="col-md-12">
	    		<div class="row">
	    			<div class="col-md-4">
	    				<?php
			    	   		$a = new Area('col1');
			    	   		$a->display($c);
			    	   	?>
	    			</div>
	    			<div class="col-md-4">
	    				<?php
			    	   		$a = new Area('col2');
			    	   		$a->display($c);
			    	   	?>
	    			</div>
	    			<div class="col-md-4">
	    				<?php
			    	   		$a = new Area('col3');
			    	   		$a->display($c);
			    	   	?>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>

	<div class="row" style="margin-top:20px;background-color:#262626;margin-right:0px">
	 	<div class="container" style="padding-top:15px; padding-bottom:10px">
	 		<?php
			   	$a = new Area('cta');
			    $a->enableGridContainer();
			    $a->display($c);
			?>
	 	</div>
	</div>

	<div class="container" style="margin-top:20px">
		 <div class="row" style="margin-right:0px">
	    	<div class="col-md-12">
	    		<div class="row">
				<?php
					$a = new Area('contenu');
					$a->enableGridContainer();
					$a->display($c);
				?>
			</div>
			</div>
		</div>
	</div>
<?php $view->inc('elements/footer.php'); ?> 

