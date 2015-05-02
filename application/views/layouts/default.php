<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $template['title']; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 

<!-- <script src="https://code.jquery.com/jquery-1.11.2.js"></script>
<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script> -->
<script src="<?php echo base_url();?>assets/js/jquery-2.1.3.js"></script>

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.css">

<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
</head>

<body>
<?php echo $template['partials']['header']; ?>

<div class="middle text-center" >
	<?php echo $template['body']; ?>
</div>

<?php echo $template['partials']['footer']; ?>

</body>

</html>