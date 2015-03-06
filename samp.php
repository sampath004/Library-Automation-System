<html>
	<head>
		<title>Change background color on every refresh using PHP and CSS</title>
		<?php
			$colors = Array("#242424", "#7A7A7A", "#EBEBEB", "#292929", "#940000", "#26008F", "#00588F", "#008F66", "#478F00", "#8F5D00");
			$color_change = "";
			$change = rand(1, 10);
			switch($change){
				case 1: $color_change = $colors[0];
				break;
				case 2: $color_change = $colors[1];
				break;
				case 3: $color_change = $colors[2];
				break;
				case 4: $color_change = $colors[3];
				break;
				case 5: $color_change = $colors[4];
				break;
				case 6: $color_change = $colors [5];
				break;
				case 7: $color_change = $colors[6];
				break;
				case 8: $color_change = $colors[7];
				break;
				case 9: $color_change = $colors[8];
				break;
				case 10: $color_change = $colors[9];
				break;
				default: echo "Something going wrong!";
			}
		?>
		<style>
			body {
				background-color:<?php echo $color_change; ?>;
			}
		</style>
	</head>
	<body>
		<p><?php echo $change; ?></p>
		<div id="content"><h1><br /> Refresh page to see changes!</h1></div>
	</body>
</html>