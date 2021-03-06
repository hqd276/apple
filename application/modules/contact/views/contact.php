<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/contact.css">

<div class="contact-form col-sm-8 col-sm-offset-2 bg-white">
	<div class="">
		<h2 class="text-uppercase"><?php echo $setting['contact']['data']->description;?></h2>
		<p>
			<?php echo $setting['contact']['data']->detail;?>
		</p>
	</div>
	<form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>contact">
		<div class="form-group">
			<div>
				<span class="success">
					<?php 
					if(isset($b_Check))
						if ($b_Check){
							echo "Gửi thành công!";
						}else{
							echo "Send Fail";
						}
					?>
				</span>
				<label class="control-label" for="inputError1"><?php echo form_error('email'); ?></label><br>
				<label class="control-label" for="inputError1"><?php echo form_error('content'); ?></label>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
			  	<input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Số điện thoại</label>
			<div class="col-sm-10">
			  	<input type="" class="form-control" id="inputEmail3" name="phone" placeholder="Phone" value="<?php echo set_value('phone'); ?>">
			</div>
		</div>
		<div class="form-group col-sm-12">
			<label for="inputEmail3" class="col-sm-2 control-label">Nội dung</label>
			<div class="col-sm-10">
				<textarea class="form-control" name="content" placeholder="Content"><?php echo set_value('content'); ?></textarea>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default">Gửi</button>
			</div>
		</div>
	</form>

</div>
<div class="clearfix"></div>