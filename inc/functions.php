<?php
function getlang() {
	$brlang = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,5));
	$eilang = strtolower(substr($brlang,0,2));
	if (file_exists("inc/languages/" . $brlang . ".php")) return require_once("inc/languages/" . $brlang . ".php");
	elseif (file_exists("inc/languages/" . $eilang . ".php")) return require_once("inc/languages/" . $eilang . ".php");
	else return require_once("inc/languages/en.php");
}
if (!isset($olclang)) {
	$olclang = getlang();
}
// score level calc function
function ScoreLevelCalculator($level, $currentScore = 0) {
	if ($level <= 100) {
		if ($level >= 2) {
			$result = 5000 / 3 * (4 * bcpow($level, 3, 0) - 3 * bcpow($level, 2, 0) - $level) + 1.25 * bcpow(1.8, $level - 60, 0);
		}
		elseif ($level = 0 || $level = 1) { 
			$result = 0;
		}
		elseif ($level < 0) {
			throw new Exception ($olclang["err"],111);
		}
	}
	elseif ($level >= 101) {
		$result = 26931190829 + 100000000000 * ($level - 100);
	}
	else { 
		throw new Exception ($olclang["err"],111);
	}
	return ($result - $currentScore);
}