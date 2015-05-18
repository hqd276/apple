<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<div class="container">
	<h2 class="text-uppercase">
		<?php echo $item['title']?>	<br>
	</h2>
	<hr>
	<div class="news-detail col-sm-10 col-sm-offset-1">
		<img class="img-responsive" src="<?php echo base_url().'uploads/news/'.$item['image']?>">
		<div class="clearfix"></div>
		<p class="description"><i><?php echo $item['description']?></i></p>
		<hr>
        <div class="tab-pane active" id="detail"><?php echo $item['detail']?></div>
        <hr>
        <div class="fb-share-button" data-href="<?php echo base_url().'chi-tiet/'.$item['slug'];?>" data-layout="button_count"></div>
		<hr>
		<span class="glyphicon glyphicon-tags"></span> <?php echo $item['tag']?> 
		<!-- <span class="glyphicon glyphicon-pencil"></span><?php echo date("d/m/Y",$item['created'])?> --> 
		<hr>
		<div class="fb-comments" data-href="<?php echo base_url().'chi-tiet/'.$item['slug']?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>

		<!-- <ul class="list-unstyled text-left">
		<?php if (count($other_news)>0) {
			foreach ($other_news as $key => $value) {?>
				<li><a href="<?php echo base_url().'chi-tiet/'.$value['slug']?>"> <?php echo $value['title']?></a></li>
				
		<?php	}
		}?>
		</ul> -->
	</div>
	<div class="clearfix"></div>
</div>