<?php
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Лабораторная работа №7</title>
</head>
<body>
	<div align="center">
		<b>Вычисление приведённой функции</b>
		<div>
			<img src="https://raw.githubusercontent.com/FL4MING/Proektirovanie_1/main/Formula.jpg" width="500px" height="80px">
		</div>
		<form name="form" method="post" action="$count">
			n
			<input type="text" name="n_input" value="0" size="5">
			x
			<input type="text" name="x_input" value="0" size="5">
			<input type="submit" name="count" value="Посчитать">
		</form>
	</div>
	<?php
		$count = function ()
		{
			$n = $_POST['n_input'];
			$x = $_POST['x_input'];

			for ($i=0; $i < $n; $i++) { 
				$math_1 = pow((-1), $i) * pow($x,2*$i*+1)/(2*$i+1);
				$result = $result+$math_1;
			}
			if ($result >= 0 || $result <=0) {
				echo "Результат: $result";
			}
			else{
				echo "Введите верное значение";
			}
		}
	?>
</body>
</html>
?>