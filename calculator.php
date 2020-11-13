
<!DOCTYPE html>
<html>
<head>
	<title>Máy tính điện tử</title>
	<meta charset="utf-8">
	<style type="text/css">
		.content{
			width: 600px;
			height: 300px;
			margin: 20px auto;
			border: 1px solid pink;
		}
		h1{
			text-align: center;
			padding: 10px 0;
			color: gray;
		}
		label{
			display: inline-block;
			width: 100px;
			text-align: right;
		}
		label, input{
			padding: 5px;
			margin: 10px 0;
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
  $number1 = '';
  $calculate = '';
  $number2 = '';
  $result = '';
  $flag = false;

  // nếu submit không là nút Xóa
  if (isset($_POST['typeSubmit']) && $_POST['typeSubmit'] != 'Xóa') {
    // nếu các ô nhập có dữ liệu
    if (isset($_POST['number1']) && isset($_POST['calculate']) && isset($_POST['number2'])) {
      $number1 = $_POST['number1'];
      $calculate = $_POST['calculate'];
      $number2 = $_POST['number2'];
    // hai ô Số thứ nhất và Số thư hai là hai số
      if (is_numeric($number1) && is_numeric($number2)) {
        $flag = true;
      // phép toán hợp lệ
        switch ($calculate) {
          case '+':
          $result = $number1 + $number2;
          break;
          case '-':
          $result = $number1 - $number2;
          break;
          case '*':
          $result = $number1 * $number2;
          break;
          case '/':
          $result = $number1 / $number2;
          break;
          default:
          $result = 'Nhập dữ liệu không hợp lệ!';
          $flag = false;
          break;
        }
      } else {
        $result = 'Nhập dữ liệu không hợp lệ!';
        $flag = false;
      }
    } else {
      $flag = false;
    } 
  } 
?>
	<div class="content">
		<h1>Mo phong may tinh dien tu</h1>
		<form action ="#" method="post">
			<label>So thu nhat</label>
			<input type="text" name="number1" value="<?php echo $number1; ?>"><br>
			<label>Phep toan</label>
			<input type="text" name="calculate" value="<?php echo $calculate; ?>"><br>
			<label>So thu hai</label>
			<input type="text" name="number2" value="<?php echo $number2; ?>"><br>
			<label></label>
			<input type="submit" name="typeSubmit" value="Xem ket qua">
			<input type="submit" name="typeSubmit" value="Xoa">
		</form>
		<p>
			<?php
			if($flag){
				echo 'Ket qua:'.$number1.''.$calculate.''.$number2.'='.$result;
			}else{
				echo $result;
			}
			?>
		</p>
	</div>
</body>
</html>
