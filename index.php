<?php
require_once 'inc/functions.php';
require_once 'inc/cfg.php';
require_once 'inc/tpl.php';
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
		elseif (!is_numeric($_GET["targlv"])) {
			$xlvl = -1;
		}
		else {
			$xlvl = floor($data[0]->level) + 1;
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
$tpl = new raintpl(); //include Rain TPL
$tpl->assign( array(
	"olclang" => $olclang,
	"GETMIMIC" => $_GET,
	"final" => $final,
	"xlvl" => (isset($xlvl) ? $xlvl : NULL),
	) );
$tpl->draw( "page" ); // draw the template