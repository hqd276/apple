<div class="header">
	<div class="container">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/">
		      	<!-- <i class="fa fa-apple"></i> -->
		      	iinvn
		      </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav">
			        <li><a href="<?php echo base_url().'news/list/0';?>"><?php echo $setting['tour']['data']->description?></a></li>
			        <li><a href="<?php echo base_url().'news/list/1';?>"><?php echo $setting['art']['data']->description?></a></li>
			        <li><a href="<?php echo base_url().'news/list/2';?>"><?php echo $setting['edu']['data']->description?></a></li>	
		      	</ul>
		      	<div class="f-search pull-right">
		        	<input type="text" class="form-control t-search" name="txtsearch">
		        	<i class="fa fa-search"></i>
		        </div>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
</div>