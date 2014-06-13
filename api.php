<?php
function ScoreLevelCalculator ($level,$currentScore = 0)
{
	if ($level <= 100)
	{
		if ($level>=2)
		{
			$part = 4 * bcpow($level, 3, 0) - 3 * bcpow($level, 2, 0) - $level;
			$result = 5000 / 3 * $part + 1.25 * bcpow(1.8, $level - 60, 0);
		}
		elseif ($level = 0 || $level = 1)
		{ 
			$result = 0;
		}
	}
	elseif ($level >= 101)
	{
		$part = $level - 100;
		$result = 26931190829 + 100000000000 * $part;
	}
	else { 
        throw new Exception ($olclang["err"],111);
    }

	return ($result - $currentScore);
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