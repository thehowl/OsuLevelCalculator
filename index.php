<?
$apikey = "API KEY HERE"; // This is holy shit damn important. To make everything work, edit this as the page of the wiki "API key" says of the repo of osu! level calculator
// Thanks to pizza kun for the function
function ScoreLevelCalculator ($level,$currentScore = 0)
{
	if ($level <= 100)
	{
		if ($level>=2) // This because if the value is 0 or 1, or any other value, it creates an error
		{
			$part = 4 * bcpow($level, 3, 0) - 3 * bcpow($level, 2, 0) - $level;
			$result = 5000 / 3 * $part + 1.25 * bcpow(1.8, $level - 60, 0);
		}
		else
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
        throw new Exception ("Holy shit, this is an error. Please write more info in the issues",111);
    }

	return ($result - $currentScore);
}
switch ($_GET["calct"]) {
    case 'api': $query = "https://osu.ppy.sh/api/get_user?k=" . $apikey . "&u=" . $_GET["nickname"] . "&m=" . $_GET["mode"];
	$json = file_get_contents($query);
	$data = json_decode($json);
	$actlvl = round($data[0]->level) + 1;
    $final = number_format(round(ScoreLevelCalculator ($actlvl,$data[0]->total_score))); break;
    case 'cl': $final = number_format(round(ScoreLevelCalculator ($_GET["leveltoreach"],0))); break;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>osu! level calculator</title>
<link href="stylev2.css" rel="stylesheet" type="text/css">
</head>
<body>
<div align="center" id="select"><a href="/">home</a> <a href="#classicmode">classic</a> <a href="http://osu.ppy.sh/forum/t/199230/start=0">topic</a></div>
    <?
switch ($_GET["calct"]) {
    case 'api': echo '<h1>Results</h1> <div class="txt">So, how much score needs ' . $_GET["nickname"] . ' to reach the next level?</div><br><div class="result">' . $final . '</div><br><div class="txt">do it again!</div><br>';
    require 'form.html';
    include 'footer.html'; break;
    case 'cl':  echo '<div class="txt">So, to reach level ' . $_GET["leveltoreach"] . ', you need a score of </div><br><div class="result">' . $final . '</div><br><div class="txt">do it again!</div><br>';
    require 'form.html';
    include 'footer.html'; break;
    default: echo '<h1>osu! level calculator</h1>';
    require 'form.html';
    echo '<br><br>';
    include 'footer.html'; break;
}   
?>
</body>
</html>