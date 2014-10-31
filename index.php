<?php
require_once 'inc/functions.php';
require_once 'inc/cfg.php';
header('Content-type: text/html; charset=utf-8');
if (!isset($olclang)) {
	$olclang = getlang();
}
if (isset($_GET["calct"])) {
	switch ($_GET["calct"]) {
		case 'api':
		$data = json_decode(file_get_contents("https://osu.ppy.sh/api/get_user?k=" . OLC_API_KEY . "&u=" . @$_GET["nickname"] . "&m=" . @$_GET["mode"] . "&type=string"));
		if (!empty($_GET["targlv"])) {
			$xlvl = $_GET["targlv"];
		}
		else {
			$xlvl = floor($data[0]->level) + 1;;
		}
		$final = number_format(round(ScoreLevelCalculator ($xlvl,$data[0]->total_score))); break;
		case 'cl': $final = number_format(round(ScoreLevelCalculator ($_GET["leveltoreach"],0))); break;
		case 's2l':
		$final =
		number_format(
			abs(
				round(
					ScoreLevelCalculator($_GET["l1"]) - ScoreLevelCalculator($_GET["l2"])
					))); break;
	}
}
if (isset($final) && $final == 0 && isset($_GET["calct"])) {
	if (is_numeric($_GET["leveltoreach"]) && isset($_GET["leveltoreach"])) {}
		elseif (is_numeric($_GET["l1"]) && isset($_GET["l1"]) && is_numeric($_GET["l2"]) && isset($_GET["l2"])) {}
			else {
				$error = $olclang["errcl"];
			}
		}
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title><?php echo $olclang["title"]; ?></title>
			<link href="res/stylev2.css" rel="stylesheet" type="text/css">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link rel="shortcut icon" href="//s.ppy.sh/favicon.ico" type="image/vnd.microsoft.icon">
			<link rel="icon" href="//s.ppy.sh/favicon.ico" type="image/vnd.microsoft.icon">
		</head>
		<body>
			<?php
			if (isset($error)) {
				echo '<div class="omgerr"><p align="center">' . $olclang["errcl"] . '</p></div>';
			}
			?>
			<div align="center" id="select"><a href="/"><?php echo $olclang["ab-home"]; ?></a> <a href="#classicmode"><?php echo $olclang["ab-cl"]; ?></a> <a href="http://osu.ppy.sh/forum/t/199230/start=0"><?php echo $olclang["ab-top"]; ?></a> <a href="https://github.com/TheHowl/OsuLevelCalculator">Github</a></div>
			<?php
			switch (isset($_GET["calct"])) {
				case 'true':
				switch ($_GET["calct"]) {
					case 'api': echo $olclang["api-res"] . $xlvl . $olclang["api-res2"] . $final . $olclang["dia"];
					require_once 'inc/form.html';
					require_once 'inc/footer.html'; break;
					case 'cl':  echo $olclang["cl-res"] . $final . $olclang["dia"];
					require_once 'inc/form.html';
					require_once 'inc/footer.html'; break;
					case 's2l': 
					echo $olclang["s2l-res"] . $final . '</div><br>' . $olclang["abs"] . $olclang["dia"]; 
					require_once 'inc/form.html';
					require_once 'inc/footer.html'; 
					break;
					default: echo '<div class="txt">' . $olclang["err-2"] . '</div><br>';
					require_once 'inc/form.html';
					require_once 'inc/footer.html'; break;
				}   break;
				default: echo '<h1>' . $olclang["title"] . '</h1>';
				require_once 'inc/form.html';
				echo '<br><br>';
				require_once 'inc/footer.html'; break;
			}

			?>
		</body>
		</html>