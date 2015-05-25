<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<div class="news-list" style="min-height:500px;;background:url('<?php echo base_url().'uploads/categories/'.$cat['image'];?>') no-repeat;background-size:cover;">
	<span class="title text-uppercase"><?php echo $cat['name']?></span>
	<hr>

	<div class="news-form  col-sm-8 col-sm-offset-2">
		<?php foreach ($list_news as $key => $value) {?>
			<div class="item text-left col-sm-6">
				<div class="img-news">
					<img class="img-responsive" src="<?php echo base_url().'uploads/news/'.$value['image']?>">
				</div>
				<div class="detail-news">
					<a href="<?php echo base_url().'chi-tiet/'.$value['slug']?>"><h4 class="text-uppercase"><?php echo $value['title']?></h4></a>
					<p><?php echo split_char($value['description'],150,1)." ..."?></p>
					<a href="<?php echo base_url().'chi-tiet/'.$value['slug']?>" class="text-uppercase more pull-right">Xem tiếp</a>
				</div>
				
			</div>
		<?php }
		?>
	</div>
	<div class="clearfix"></div>
</div>