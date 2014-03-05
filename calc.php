<?
$level = $_POST["leveltoreach"];
if ($level<="100")
  {
  if ($level>="2") // This because if the value is 0 or 1, or any other value, it creates an error
  {
	$part = 4 * bcpow($level, 3, 0) - 3 * bcpow($level, 2, 0) - $level;
	$result = 5000 / 3 * $part + 1.25 * bcpow(1.8, $level - 60, 0);
  }
  else
  { $result = "0";
  }
  }
elseif ($level>="101")
  {
  $part = $level - 100;
  $result = 26931190829 + 100000000000 * $part;
  }
else
  {
  $result = "An error happened. Please <a href=\"https://github.com/TheHowl/OsuLevelCalculator/issues\" target=\"_blank\" title=\"Report it on GitHub\">Report it</a> saying also what you wrote in the form";
  };
if ($result<"0")
	{
	$resultfinal = "0";
	}
else
	{
	$resultfinal = $result;
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Results</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container" align="center"><div class="text" align="left"><div class="title">Results</div><br><div align="center" class="divisor"></div><br>
Here's the result: <? echo round($resultfinal); ?>.<br><br>Do it again!<br><? require 'form.php' ?>
</div></div><br>version 1.3
</body>
</html>