<div class="about-home container">
	<div class="">
		<div id="carousel-home" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		  	<?php foreach ($banners as $key => $value){?>
		    <li data-target="#carousel-home" data-slide-to="0" class="<?php echo ($key==0)?"active":"" ?>"></li>
		    <?php } ?>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		  	<?php foreach ($banners as $key => $value){?>
		    <div class="item <?php echo ($key==0)?"active":"" ?>" style="background:url(<?php echo base_url("uploads/banner/".$value['image']); ?>) no-repeat">
		    	<div class="carousel-caption">
		        	<?php echo $value['title']; ?>
		      	</div>
		    </div>
		   	<?php } ?>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<!-- <img class="about-image pull-right" src="<?php echo base_url();?>assets/images/about.png"> -->
	</div>
	<div class="clearfix"></div>
	<div class="product">
		<div class="col-md-4 item box">
			<img src="<?php echo base_url();?>assets/images/1.jpg">
			<span class="caption simple-caption">  
	        <p class="text-uppercase">Store</p>  
	        </span>  
		</div>
		<div class="col-md-4 item box">
			<img id="image-6" src="<?php echo base_url();?>assets/images/2.jpg">
			<span class="caption scale-caption">  
	        <p class="text-uppercase">Mac</p>  
	        </span> 
		</div>
		<div class="col-md-4 item box">
			<img src="<?php echo base_url();?>assets/images/3.jpg">
			<span class="caption simple-caption">  
	        <p class="text-uppercase">Iphone</p>  
	        </span> 
		</div>
		<!-- <div class="col-sm-4 item box" style="background-image:url('images/1.jpg')"></div>
		<div class="col-sm-4 item box" style="background-image:url('images/2.jpg')"></div>
		<div class="col-sm-4 item box" style="background-image:url('images/3.jpg')"></div> -->
	</div>
</div>