<!DOCTYPE html>
<html>
	<head>
		<title>PersDB 2013</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="css/main.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<?php include 'header.php';?>
		<div class="container">
			<div class="wrapper">
				<?php include 'left_aside.php';?>
				<div class="content">
					<?php include 'pages/home.php';?>
				</div>
				<?php include 'right_aside.php';?>
			</div>
			<?php include 'footer.php';?>
		</div>
	</body>

	<script>window.jQuery || document.write('<script type="text/javascript" charset="utf-8" src="js/jquery.1.9.1.js"><\/script>')</script>
	<script>
		var $j = jQuery.noConflict();
		$j('.bt.link').bind('click', function(evt){
			evt.preventDefault();
			$j.ajax({
			    url: 'pages/'+$j(evt.currentTarget).attr('id')+'.php',
			    type: 'GET',
			    async: false,
			    success: function(data){
					$j('.content').html(data);
				}
			});
		});
	</script>
</html>