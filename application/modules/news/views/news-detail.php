<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<div class="container">
	<h2 class="text-uppercase"><?php echo $item['title']?></h2>
	<hr>
	<div class="news-detail">
		<img class="img-responsive" src="<?php echo base_url().'uploads/news/'.$item['image']?>">
		<div class="clearfix"></div>
		<p class="description"><i><?php echo $item['description']?></i></p>
		<hr>
        <div class="tab-pane active" id="detail"><?php echo $item['detail']?></div>
		<hr>
		<span class="glyphicon glyphicon-tags"></span> <?php echo $item['tag']?> 
		<!-- <span class="glyphicon glyphicon-pencil"></span><?php echo date("d/m/Y",$item['created'])?> --> 
		<hr>
		<!-- <ul class="list-unstyled text-left">
		<?php if (count($other_news)>0) {
			foreach ($other_news as $key => $value) {?>
				<li><a href="<?php echo base_url().'news/detail/'.$value['id']?>"> <?php echo $value['title']?></a></li>
				
		<?php	}
		}?>
		</ul> -->
	</div>
	<div class="clearfix"></div>
</div>