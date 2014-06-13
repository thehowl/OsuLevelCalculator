<?php
header ('Content-type: text/html; charset=utf-8');
$brlang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
if(file_exists("olclangs/" . $brlang . ".php")) {
    include "olclangs/" . $brlang . ".php";
}
else {
    include "olclangs/en.php";
}
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
switch ($_GET["calct"]) {
    case 'api':
    $query = "https://osu.ppy.sh/api/get_user?k=" . $apikey . "&u=" . $_GET["nickname"] . "&m=" . $_GET["mode"] . "&type=string";
    $json = file_get_contents($query);
    $data = json_decode($json);
    if ($_GET["targlv"] != "") {
        $xlvl = $_GET["targlv"];
    }
    else {
         $xlvl = floor($data[0]->level) + 1;;
    }
    $thefinalresult = number_format(round(ScoreLevelCalculator ($xlvl,$data[0]->total_score))); break;
    case 'cl': $thefinalresult = number_format(round(ScoreLevelCalculator ($_GET["leveltoreach"],0))); break;
    case 's2l':
    $ratsypart = ScoreLevelCalculator($_GET["l1"]) - ScoreLevelCalculator($_GET["l2"]);
    $thefinalresult = number_format(abs(round($ratsypart))); break;
}
if ($thefinalresult == 0 && isset($_GET["calct"])) {
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
<link href="stylev2.css" rel="stylesheet" type="text/css">
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
    case 'api': echo $olclang["api-res"] . $xlvl . $olclang["api-res2"] . $thefinalresult . $olclang["dia"];
    require 'form.html';
    include 'footer.html'; break;
    case 'cl':  echo $olclang["cl-res"] . $thefinalresult . $olclang["dia"];
    require 'form.html';
    include 'footer.html'; break;
    case 's2l': 
        echo $olclang["s2l-res"] . $thefinalresult . '</div><br>' . $olclang["abs"] . $olclang["dia"]; 
        require 'form.html';
        include 'footer.html'; 
        break;
    default: echo '<div class="txt">' . $olclang["err-2"] . '</div><br>';
    require 'form.html';
    include 'footer.html'; break;
    }   break;
    default: echo '<h1>' . $olclang["title"] . '</h1>';
    require 'form.html';
    echo '<br><br>';
    include 'footer.html'; break;
}

?>
</body>
</html>
