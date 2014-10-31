<?php
require_once "inc/functions.php";
if (!isset($olclang)) {
	$olclang = getlang();
}
if (!isset($_GET['method'])) {
	echo '{"error":"method isnt set"}';
	die();
}
switch ($_GET['method']) {
	case 'sim':
	if (isset($_GET["ltr"]) == false) {
		'{"error":"level to reach (ltr) isnt set"}';
	}
	$res = round(ScoreLevelCalculator ($_GET["ltr"]));
	if ($res == 0) {
		if (is_numeric($_GET["ltr"]) && isset($_GET["ltr"])) {}
			else {
				echo '{"error":"result is == 0"}';
				die();
			}
		}
		echo '{"result":' . $res . '}';
		die();
		break;
		case 'com':
		if (!isset($_GET["curscore"]) || !isset($_GET["tlvl"]) || $_GET["tlvl"] == "") {
			echo '{"error":"something isnt set or tlv (target level) is null"}';
			die();
		}
		$res = round(ScoreLevelCalculator ($_GET["tlvl"],$_GET["curscore"]));
		echo '{"result":' . $res . '}';
		break;
	}
?>