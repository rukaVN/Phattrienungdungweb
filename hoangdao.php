
<!DOCTYPE html>
<html>
<head>
	<title>Lấy chòm sao</title>
	<meta charset="utf-8">
	<style type="text/css">
		.content{
			width: 600px;
			height: 300px;
			margin: 20px auto;
			border: 1px solid blue;
			background: ;
		}
		h1{
			text-align: center;
			padding: 10px 0;
			color: red;
		}
		label{
			display: inline-block;
			width: 100px;
			text-align: right;
		}
		label, input{
			padding: 5px ;
			margin: 10px 0 ;
			font-size: 16px;
			font-weight: bold;
		}
		p{
			text-align: center;
			font-size: 20px;
			font-weight: bold;
			color: none;
			font-style: italic;

		}
	</style>
</head>


<body>
	<?php
	$day="";
	$month="";
	$image="";
	$name="";
	$time="";
	
	if(isset($_POST['typeSubmit'])&& $_POST['typeSubmit'] != 'Xóa'){
	if(isset($_POST['day']) && isset($_POST['month'])){
		$day= $_POST['day'];
		$month= $_POST['month'];

	if(is_numeric($day) && is_numeric($month)){
	$flagShow = true;
	switch($month){
	case '1':
	if($day <1 || $day >31 ){$flagShow = false; break;}
		if($day <= 19){$image ='maket'; $name='Ma kết'; $time='23/01 - 19/01';}
		if($day >= 20){$image ='Aquarius'; $name='Bảo bình'; $time='21/1 – 19/2';}
		break;
		case '2':
		ì
}
}
}
}
	?>

	<div class="content">
		<h1>Lấy chòm sao</h1>
		<form action ="#" method="post">
			<label>Ngày sinh</label>
			<input type="text" name="day" value="<?php echo $day; ?>"><br>
			<label>Tháng sinh</label>
			<input type="text" name="month" value="<?php echo $month; ?>"><br>

			<input type="submit" name="typeSubmit" value="Xem kết quả">
			<input type="submi" name="typeSubmit" value="Xóa">
		</form>
		
	</div>
</body>
</html>