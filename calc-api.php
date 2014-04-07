<?
$apikey = "API KEY HERE"; // This is holy shit damn important. To make everything work, edit this as the page of the wiki "API key" says of the repo of osu! level calculator
$JSON = file_get_contents("https://osu.ppy.sh/api/get_user?k=" . $apikey . "&u=" . $_POST["nickname"] . "&m=" . S_POST["mode"]);
$data = json_decode($JSON);
$finald = array();
$finald["nxlv"] = round($data[1]->level) + 1;
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
  $result = "error";
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
Here's the result: <div align=center class=result><?
	echo number_format(round($resultfinal));
?>.</div><br>Do it again!<br><? 
	require 'form.html' 
?>
</div></div><br><?
	include 'footer.html';
?>
</body>
</html>