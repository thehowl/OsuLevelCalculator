<?
$level = $_POST["leveltoreach"];
if ($level<="100")
  {
  if ($level>="2") // This because if the value is 0 or 1, or any other value, it creates an error
  {	$part = 4 * bcpow($level, 3, 0) - 3 * bcpow($level, 2, 0) - $level;
	$resultfinal = 5000 / 3 * $part + 1.25 * bcpow(1.8, $level - 60, 0);
  }
  else
  { $resultfinal = "0";
  }
  }
elseif ($level>="101")
  {
  $part = $level - 100;
  $resultfinal = 26931190829 + 100000000000 * $part;
  }
else
  {
  $resultfinal = "error";
  };
?>
<!DOCTYPE html>
<html>
<head>
<title>Results</title>
</head>
<body>
Here's the result: <? echo $resultfinal ?>.<br><br>Do it again!<br><? require 'form.php' ?>
</body>
</html>