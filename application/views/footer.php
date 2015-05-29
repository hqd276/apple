<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/footer.css">

<div class="footer">
	
	<div class="container">
	<?php if($is_news_page){?>
		<div class="col-md-4">
			<?php switch ($type) {
				case 0:
					$strType = 'tour';
					$link = 'du-lich';
					break;
				case 1:
					$strType = 'art';
					$link = 'thu-cong';
					break;
				case 2:
					$strType = 'edu';
					$link = 'giao-duc';
					break;
				
				default:
					$strType = 'tour';
					$link = 'du-lich';
					break;
			}?>
			<h4 class="text-uppercase"><?php echo $setting[$strType]['data']->description?></h4>
			<ul class="list-unstyled">
				<?php if (count($categories)>0){?>
		      		<?php	foreach ($categories as $key => $value) {
	      				echo "<li><a href='".base_url().$link.'/'.$value['slug']."'>".$value['name']."</a></li>";
	      			}?>
		      	<?php }?>
			</ul>
		</div>
	<?php }else{?>
		<div class="col-md-4">
			<h4 class="text-uppercase"><?php echo $setting['tour']['data']->description?></h4>
			<ul class="list-unstyled">
				<?php if (count($cat_tour)>0){?>
		      		<?php	foreach ($cat_tour as $key => $value) {
	      				echo "<li><a href='".base_url()."du-lich/".$value['slug']."'>".$value['name']."</a></li>";
	      			}?>
		      	<?php }?>
			</ul>
		</div>
		<div class="col-md-4">
			<h4 class="text-uppercase"><?php echo $setting['art']['data']->description?></h4>
			<ul class="list-unstyled">
				<?php if (count($cat_art)>0){?>
		      		<?php	foreach ($cat_art as $key => $value) {
	      				echo "<li><a href='".base_url()."thu-cong/".$value['slug']."'>".$value['name']."</a></li>";
	      			}?>
		      	<?php }?>
			</ul>
		</div>
		<div class="col-md-4">
			<h4 class="text-uppercase"><?php echo $setting['edu']['data']->description?></h4>
			<ul class="list-unstyled">
				<?php if (count($cat_edu)>0){?>
		      		<?php	foreach ($cat_edu as $key => $value) {
	      				echo "<li><a href='".base_url()."giao-duc/".$value['slug']."'>".$value['name']."</a></li>";
	      			}?>
		      	<?php }?>
			</ul>
		</div>
	<?php }?>
	</div>
	<div class="partner">
		<marquee onmouseover="this.stop();" onmouseout="this.start();">
			<?php foreach ($list_member as $key => $value) {?>
				<a target="_blank" href="<?php echo $value['description']; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $value['name']; ?>">
					<img src="<?php echo base_url().'uploads/member/'.$value['image'] ?>">
				</a>
			<?php } ?>
		</marquee>
	</div>
	<div class="container">
		<h5 class="pull-left">&copy; - Copyright by HD</h5>

		<ul class="nav navbar-nav pull-right hidden-xs">
			<li class="dropup">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $setting['about-menu']['data']->description?> <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	          	<?php foreach ($about_list as $key => $value) {?>
	          		<li><a href="<?php echo base_url().$value['data']->slug;?>"><?php echo $value['data']->name?></a></li>
	          	<?php }?>
	            
	          </ul>
	        </li>
	        <li><a href="<?php echo base_url().'du-lich';?>"><?php echo $setting['tour']['data']->description?></a></li>
	        <li><a href="<?php echo base_url().'thu-cong';?>"><?php echo $setting['art']['data']->description?></a></li>
	        <li><a href="<?php echo base_url().'giao-duc';?>"><?php echo $setting['edu']['data']->description?></a></li>
	        <li class="dropup">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $setting['contact']['data']->description?> <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	          	<?php foreach ($contact_list as $key => $value) {?>
	          		<li><a href="<?php echo base_url().$value['data']->slug;?>"><?php echo $value['data']->name?></a></li>
	          	<?php }?>
	            <li><a href="<?php echo base_url().'contact';?>"><?php echo $setting['contact-menu']['data']->description?></a></li>
	          </ul>
	        </li>
      	</ul>
	</div>
	
</div>