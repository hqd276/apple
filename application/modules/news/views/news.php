<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<div class="about-home container">
	<!-- <div class="news-categories">
		<ul class="list-inline">
			<?php foreach ($categories as $k => $v) {?>
			<li><a href="<?php echo base_url().'news/list/'.$v['type'].'/'.$v['id']?>"><?php echo $v['name']?></a></li>
			<?php }?>
		</ul>
	</div> -->
	<div class="product">
		<div class="col-md-12 item box">
			<a href="<?php echo base_url().'news/list/'.$categories[0]['type'].'/'.$categories[0]['id']?>">
				<img src="<?php echo base_url().'uploads/categories/'.$categories[0]['image'];?>">
				<span class="caption simple-caption">  
		        <p class="text-uppercase"><?php echo $categories[0]['name']?></p>  
		        </span>
	        </a>
		</div>	
		<div class="col-md-4 item box">
			<a href="<?php echo base_url().'news/list/'.$categories[1]['type'].'/'.$categories[1]['id']?>">
				<img src="<?php echo base_url().'uploads/categories/thumbs/'.$categories[1]['image'];?>">
				<span class="caption simple-caption">  
		        <p class="text-uppercase"><?php echo $categories[1]['name']?></p>  
		        </span>
	        </a>
		</div>
		<div class="col-md-4 item box">
			<a href="<?php echo base_url().'news/list/'.$categories[2]['type'].'/'.$categories[2]['id']?>">
				<img src="<?php echo base_url().'uploads/categories/thumbs/'.$categories[2]['image'];?>">
				<span class="caption simple-caption">  
		        <p class="text-uppercase"><?php echo $categories[2]['name']?></p>  
		        </span>
	        </a>
		</div>
		<div class="col-md-4 item box">
			<a href="<?php echo base_url().'news/list/'.$categories[3]['type'].'/'.$categories[3]['id']?>">
				<img src="<?php echo base_url().'uploads/categories/thumbs/'.$categories[3]['image'];?>">
				<span class="caption simple-caption">  
		        <p class="text-uppercase"><?php echo $categories[3]['name']?></p>  
		        </span>
	        </a>
		</div>
		<div class="col-md-12 item box">
			<a href="<?php echo base_url().'news/list/'.$categories[4]['type'].'/'.$categories[4]['id']?>">
				<img src="<?php echo base_url().'uploads/categories/'.$categories[4]['image'];?>">
				<span class="caption simple-caption">  
		        <p class="text-uppercase"><?php echo $categories[4]['name']?></p>  
		        </span>
	        </a>
		</div>	
	</div>

	<div class="news-form">
		<?php foreach ($list_news as $key => $value) {?>
			<div class="item">
				<div class="col-md-4">
					<img class="img-responsive" src="<?php echo base_url().'uploads/news/'.$value['image']?>">
				</div>
				<div class="col-md-8">
					<a href="<?php echo base_url().'news/detail/'.$value['id']?>"><h4 class="text-uppercase"><?php echo $value['title']?></h4></a>
					<p><?php echo split_char($value['description'],150,1)." ..."?></p>
					<a href="<?php echo base_url().'news/detail/'.$value['id']?>" class="text-uppercase more pull-right">More</a>
				</div>
				
			</div>
		<?php }
		?>
	</div>
	<div class="clearfix"></div>
</div>