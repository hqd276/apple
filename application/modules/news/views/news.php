<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<?php switch ($type) {
	case 0:
		$link = 'du-lich';
		break;
	case 1:
		$link = 'thu-cong';
		break;
	case 2:
		$link = 'giao-duc';
		break;
	default:
		$link = 'du-lich';
		break;
}?>
<div class="news-categories">
	<ul class="list-inline">
		<?php foreach ($categories as $k => $v) {?>
		<li>
			<a class="text-center" href="<?php echo base_url().$link.'/'.$v['slug']?>">
				<img src="<?php echo base_url().'uploads/categories/'.$v['image'];?>">
				<p><?php echo $v['name']?></p>
			</a>
		</li>
		<?php }?>
	</ul>
</div>
<div class="news-list ">
	<div class="product">
		
		<div class="col-md-12 item box big">
			<a href="<?php echo base_url().$link.'/'.$categories[0]['slug']?>">
				<img src="<?php echo base_url().'uploads/categories/'.$categories[0]['image'];?>">
				<span class="caption simple-caption">  
		        <p class="text-uppercase"><?php echo $categories[0]['name']?></p>  
		        </span>
	        </a>
		</div>	
		
		<div class="col-md-4 item box">
			<a href="<?php echo base_url().$link.'/'.$categories[1]['slug']?>">
				<img src="<?php echo base_url().'uploads/categories/thumbs/'.$categories[1]['image'];?>">
				<span class="caption simple-caption">  
		        <p class="text-uppercase"><?php echo $categories[1]['name']?></p>  
		        </span>
	        </a>
		</div>
		<div class="col-md-4 item box">
			<a href="<?php echo base_url().$link.'/'.$categories[2]['slug']?>">
				<img src="<?php echo base_url().'uploads/categories/thumbs/'.$categories[2]['image'];?>">
				<span class="caption simple-caption">  
		        <p class="text-uppercase"><?php echo $categories[2]['name']?></p>  
		        </span>
	        </a>
		</div>
		<div class="col-md-4 item box">
			<a href="<?php echo base_url().$link.'/'.$categories[3]['slug']?>">
				<img src="<?php echo base_url().'uploads/categories/thumbs/'.$categories[3]['image'];?>">
				<span class="caption simple-caption">  
		        <p class="text-uppercase"><?php echo $categories[3]['name']?></p>  
		        </span>
	        </a>
		</div>
		<div class="col-md-12 item box big">
			<a href="<?php echo base_url().$link.'/'.$categories[4]['slug']?>">
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
					<a href="<?php echo base_url().'chi-tiet/'.$value['slug']?>"><h4 class="text-uppercase"><?php echo $value['title']?></h4></a>
					<p><?php echo split_char($value['description'],150,1)." ..."?></p>
					<a href="<?php echo base_url().'chi-tiet/'.$value['slug']?>" class="text-uppercase more pull-right">More</a>
				</div>
				
			</div>
		<?php }
		?>
	</div>
	<div class="clearfix"></div>
</div>