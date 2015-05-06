<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<div class="container" style="min-height:400px;background:url('<?php echo base_url().'uploads/categories/'.$cat['image'];?>') no-repeat;background-size:cover;">
	<h2 class="text-uppercase"><?php echo $cat['name']?></h2>
	<hr>

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