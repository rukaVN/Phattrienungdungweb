
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Pagination</title>
		<style type="text/css">
			.content{
				margin: 10px auto;
			    width: 800px;
			    text-align: center;
			    border: 1px solid red;
			    padding: 20px;
			}
			.pages a{
				display: inline-block;
				background: gray;
				color: none;
				text-decoration: none;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<div class="pages">
				<a href="lab03_Form2.php?page=1">1</a>
				<a href="lab03_Form2.php?page=2">2</a>
				<a href="lab03_Form2.php?page=3">3</a>
				<a href="lab03_Form2.php?page=4">4</a>
				<a href="lab03_Form2.php?page=5">5</a>
				<a href="lab03_Form2.php?page=6">6</a>
				<a href="lab03_Form2.php?page=7">7</a>
			</div>
		</div>
		<?php
			$page=(isset($_GET['page'])==true) ? $_GET['page']:0;
		?>
		<p>Bạn đang ở trang thứ <?php echo $page; ?></p>
		
	</body>
	</html>