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
	else throw new Exception ("Holy shit, this is an error. Please write more info in the issues",111);

	$result = abs($result);

	return ($result - $currentScore);
}
if ($_POST['calct'] = 'api') {
	$query = "https://osu.ppy.sh/api/get_user?k=" . $apikey . "&u=" . $_POST["nickname"] . "&m=" . $_POST["mode"];
	$json = file_get_contents($query);
	$data = json_decode($json);
	$actlvl = round($data[0]->level);
	$lvlreach = $actlvl + 1;
    $final = number_format(round(ScoreLevelCalculator ($level,$data[0]->total_score : 0)));
}
elseif ($_POST['calct'] = 'cl') {
    $final = number_format(round(ScoreLevelCalculator ($_POST["leveltoreach"],0)));
}
?>
<!DOCTYPE html>
<html>
<head>
<title>osu! level calculator</title>
<link href="stylev2.css" rel="stylesheet" type="text/css">
</head>
<body>
<div align="center" id="select"><a href="/">home</a> <a href="classic.php">classic</a> <a href="http://osu.ppy.sh/forum/t/199230/start=0">topic</a></div>
    <?
if (isset($final)) {
    echo '<h1>Results</h1>';
    if ($_POST['calct'] = 'api' {
        echo '<div class="txt">So, how much score needs ' . $_POST["nickname"] . ' to reach the next level?</div>';
    }
    else {
        echo '<div class="txt">So, to reach level ' . $_POST["leveltoreach"] . ', you need a score of </div>';
    }
    echo '<br><div class="result">' . $final . '</div><br><div class="txt">do it again!</div><br>';
    require 'form.html';
    
}
else {
    echo '<h1>osu! level calculator</h1>';
    require 'form.html';
    echo '<br><br>';
    include 'footer.html';
}
?>
</body>
</html>