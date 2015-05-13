<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/footer.css">

<div class="footer">
	
	<div class="container">
	<?php if($is_news_page){?>
		<div class="col-md-4">
			<?php switch ($type) {
				case 0:
					$strType = 'tour';
					break;
				case 1:
					$strType = 'art';
					break;
				case 2:
					$strType = 'edu';
					break;
				
				default:
					$strType = 'tour';
					break;
			}?>
			<h4 class="text-uppercase"><?php echo $setting[$strType]['data']->description?></h4>
			<ul class="list-unstyled">
				<?php if (count($categories)>0){?>
		      		<?php	foreach ($categories as $key => $value) {
	      				echo "<li><a href='".base_url()."news/list/".$value['type']."/".$value['id']."'>".$value['name']."</a></li>";
	      			}?>
		      	<?php }?>
			</ul>
		</div>
	<?php }else{?>
		<div class="col-md-4">
			<h4 class="text-uppercase">Tours</h4>
			<ul class="list-unstyled">
				<?php if (count($cat_tour)>0){?>
		      		<?php	foreach ($cat_tour as $key => $value) {
	      				echo "<li><a href='".base_url()."news/list/0/".$value['id']."'>".$value['name']."</a></li>";
	      			}?>
		      	<?php }?>
			</ul>
		</div>
		<div class="col-md-4">
			<h4 class="text-uppercase">Art</h4>
			<ul class="list-unstyled">
				<?php if (count($cat_art)>0){?>
		      		<?php	foreach ($cat_art as $key => $value) {
	      				echo "<li><a href='".base_url()."news/list/1/".$value['id']."'>".$value['name']."</a></li>";
	      			}?>
		      	<?php }?>
			</ul>
		</div>
		<div class="col-md-4">
			<h4 class="text-uppercase">Edu</h4>
			<ul class="list-unstyled">
				<?php if (count($cat_edu)>0){?>
		      		<?php	foreach ($cat_edu as $key => $value) {
	      				echo "<li><a href='".base_url()."news/list/2/".$value['id']."'>".$value['name']."</a></li>";
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

		<ul class="nav navbar-nav pull-right">
			<li><a href="<?php echo base_url().'contact';?>"><?php echo $setting['about']['data']->description?></a></li>
	        <li><a href="<?php echo base_url().'news/list/0';?>"><?php echo $setting['tour']['data']->description?></a></li>
	        <li><a href="<?php echo base_url().'news/list/1';?>"><?php echo $setting['art']['data']->description?></a></li>
	        <li><a href="<?php echo base_url().'news/list/2';?>"><?php echo $setting['edu']['data']->description?></a></li>
	        <li><a href="<?php echo base_url().'contact';?>"><?php echo $setting['contact']['data']->description?></a></li>
      	</ul>
	</div>
	
</div>