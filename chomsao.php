
<!DOCTYPE html>
<html>
<head>
	<title>Lấy chòm sao</title>
	<meta charset="utf-8">
	<style type="text/css">
		
		.content{
			width: 600px;
			height: 500px;
			margin: 20px auto;
			border: 1px solid blue;
			/*background: ;*/
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
			/**Ma Kết (Capricorn – Con Dê) (22/12 – 19/1)
			Bảo Bình (Aquarius –  Cái Bình) (20/1 – 19/2)
			Song Ngư (Pisces – Đôi Cá) (20/2 – 20/3)
			Bạch Dương (Aries – Con Cừu) ( 21/3 – 20/4)
			Kim Ngưu (Taurus – Con Trâu) (21/4 – 21/5)
			Song Tử (Gemini – Sinh Đôi) (21/5 – 21/6)
			Cự Giải (Cancer – Con Cua) (22/6 – 22/7)
			Sư Tử (Leo) (23/7 – 22/8)
			Xử Nữ (Virgo – Trinh Nữ) (23/8 – 23/9)
			Thiên Bình (Libra – Cái Cân) (24/9 – 22//10)
			Thiên Yết (Scorpius – Bọ Cạp) (24/10 – 22/11)
			Nhân Mã (Sagittarius – Còn gọi là Xạ Thủ) (23/11 – 21/12) */
			if(is_numeric($day) && is_numeric($month)){
			$flagShow = true;
			switch($month){
			case '1':
				if($day <1 || $day >31 ){$flagShow = false; break;}
				if($day <= 19){ $image ='maket'; $name='Ma kết'; $time='22/12 - 19/1';}
				if($day >= 20){ $image ='Aquarius'; $name='Bảo bình'; $time='20/01 - 19/02';}
			break;
			case '2':
				if($day <1 || $day >29){$flagShow=false;break;}
				if($day <= 19){ $image='Aquarius';$name='Bảo bình';$time='20/01 - 19/02';}
				if($day >= 20){ $image='Pisces';$name='Song ngư';$time='20/02 - 20/03';}
			break;
			case 3:
	                   if($day<=21) {$name = "Song Ngư"; $image = "Pisces"; $time = "20/2 - 21/3";}
	                   if($day>21) {$name = "Bạch Dương"; $image = "Aries"; $time = "22/3 - 20/4";}
	                   if($day<1 || $day>31){$flag=false;}
	                   break;
	               case 4:
	                   if($day<=20) {$name = "Bạch Dương"; $image = "Aries"; $time = "22/3 - 20/4";}
	                   if($day>20) {$name = "Kim Ngưu"; $image = "Taurus"; $time = "21/4 - 21/5";}
	                   if($day<1 || $day>30){$flag=false;}
	                   break;
	               case 5:
	                   if($day<=22) {$name = "Kim Ngưu"; $image = "Taurus"; $time = "21/4 - 21/5";}
	                   if($day>22) {$name = "Song Tử"; $image = "Gemini"; $time = "22/5 - 22/6";}
	                   if($day<1 || $day>31){$flag=false;}
	                   break;
	               case 6:
	                   if($day<=22) {$name = "Song Tử"; $image = "Gemini"; $time = "22/5 - 22/6";}
	                   if($day>22) {$name = "Cự Giải"; $image = "Cancer"; $time = "23/6 - 23/7";}
	                   if($day<1 || $day>30){$flag=false;}
	                   break;
	               case 7:
	                   if($day<=23) {$name = "Cự Giải"; $image = "Cancer"; $time = "23/6 - 23/7";}
	                   if($day>23) {$name = "Sư Tử"; $image = "Leo"; $time = "24/7 - 23/8";}
	                   if($day<1 || $day>31){$flag=false;}
	                   break;
	               case 8:
	                   if($day<=23) {$name = "Sư Tử"; $image = "Leo"; $time = "24/7 - 23/8";}
	                   if($day>23) {$name = "Xử Nữ"; $image = "Virgo"; $time = "24/8 - 23/9";}
	                   if($day<1 || $day>31){$flag=false;}
	                   break;
	               case 9:
	                   if($day<=23) {$name = "Xử Nữ"; $image = "Virgo"; $time = "24/8 - 23/9";}
	                   if($day>23) {$name = "Thiên Xứng"; $image = "Libra"; $time = "24/9 - 23/10";}
	                   if($day<1 || $day>30){$flag=false;}
	                   break;
	               case 10:
	                   if($day<=23) {$name = "Thiên Xứng"; $image = "Libra"; $time = "24/9 - 23/10";}
	                   if($day>23) {$name = "Hổ Cáp"; $image = "Scorpio"; $time = "24/10 - 22/11";}
	                   if($day<1 || $day>31){$flag=false;}
	                   break;
	               case 11:
	                   if($day<=22) {$name = "Hổ Cáp"; $image = "Scorpio"; $time = "24/10 - 22/11";}
	                   if($day>22) {$name = "Nhân Mã"; $image = "Sagittarius"; $time = "22/11 - 22/12";}
	                   if($day<1 || $day>30){$flag=false;}
	                   break;
	               case 12:
	                   if($day<=22) {$name = "Nhân Mã"; $image = "Sagittarius"; $time = "22/11 - 22/12";}
	                   if($day>22) {$name = "Ma Kết"; $image = "Capricorn"; $time = "23/12 - 19/1";}
	                   if($day<1 || $day>31){$flag=false;}
	                   break;
	                   
			default:
			$flagShow=false;
			}
			}else{
				$flagShow=false;
			}
		}
		if($flagShow){
			$result = '<div class="result">
			<div class="image">
			  <img src="images/' . $image . '.png" alt="' . $image . '">
			</div>
			<div class="text">
			  <span>' . $name . ' (' . ucfirst($image) . ' : ' . $time . ')</span>
			</div>
		  </div>';
	}else { $result = '<div class="text">Dữ liệu không hợp lệ </div>'; }
}
	
	?>

	<div class="content">
		<h1>Lấy chòm sao</h1>
		<form action ="#" method="post">
			<label>Ngày sinh</label>
			<input type="text" name="day" value="<?php echo $day; ?>"><br>
			<label>Tháng sinh</label>
			<input type="text" name="month" value="<?php echo $month; ?>"><br>
			<div class="result">
			<input type="submit" name="typeSubmit" value="Lấy chòm sao">
			<input type="submit" name="typeSubmit" value="Xóa">
			</div>
		</form>
		<?php echo $result; ?>
	</div>
</body>
</html>