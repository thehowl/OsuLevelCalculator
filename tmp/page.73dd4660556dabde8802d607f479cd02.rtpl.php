<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $olclang['title'];?></title>
	<link href="res/stylev2.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="//s.ppy.sh/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="icon" href="//s.ppy.sh/favicon.ico" type="image/vnd.microsoft.icon">
</head>
<body>
	<?php if( isset($error) ){ ?>
		<div class="omgerr"><p align="center"><?php echo $olclang['errcl'];?></p></div>
	<?php } ?>
	<div align="center" id="select">
		<a href="/"><?php echo $olclang['ab-home'];?></a> 
		<a href="#classicmode"><?php echo $olclang['ab-cl'];?></a>
		<a href="http://osu.ppy.sh/forum/t/199230/start=0"><?php echo $olclang['ab-top'];?></a>
		<a href="https://github.com/TheHowl/OsuLevelCalculator">Github</a>
	</div>
	<?php if( !isset($GETMIMIC["calct"]) ){ ?>
		<h1><?php echo $olclang['title'];?></h1>
	<?php }else{ ?>
		<?php if( $GETMIMIC["calct"] == 'api' ){ ?>
			<?php echo $olclang['api-res'];?><?php echo $xlvl;?><?php echo $olclang['api-res2'];?><?php echo $final;?><?php echo $olclang['dia'];?>
		<?php }elseif( $GETMIMIC["calct"] == 'cl' ){ ?>
			<?php echo $olclang['cl-res'];?><?php echo $final;?><?php echo $olclang['dia'];?>
		<?php }elseif( $GETMIMIC["calct"] == 's2l' ){ ?>
			<?php echo $olclang['s2l-res'];?><?php echo $final;?></div><br><?php echo $olclang['abs'];?><?php echo $olclang['dia'];?>
		<?php }else{ ?>
			<div class="txt"><?php echo $olclang['err-2'];?></div><br>
		<?php } ?>
	<?php } ?>
	<form action="index.php" method="get">
    	<span class="txt"><?php echo $olclang['insnick'];?></span> <input type="text" name="nickname" autocomplete="off" placeholder="<?php echo $olclang['example'];?> WubWoofWolf" class="submit api"><br>
    	<span class="txt">
    		<?php echo $olclang['mode'];?> 
    		<input type="radio" name="mode" value="0">osu! standard 
    		<input type="radio" name="mode" value="1">Taiko 
    		<input type="radio" name="mode" value="2">Catch the Beat  
    		<input type="radio" name="mode" value="3">osu!mania
    	</span><br>
    	<span class="txt"><?php echo $olclang['targ-lv'];?> 
    		<input type="text" name="targlv" autocomplete="off" class="submit cl">
    	</span><br>
    	<span class="txt">
    		<?php echo $olclang['then'];?>
    	</span> 
    	<input type="hidden" value="api" name="calct"> <button type="submit"><?php echo $olclang['submit'];?></button>
	</form><!-- random <br> tags because yes --><br><br><br><br>
	<!-- Classic. -->
	<h1 id="classicmode"><?php echo $olclang['cl-md'];?></h1>
	<form action="index.php" method="get">
	<div class="txt">
		<?php echo $olclang['cl-tt'];?> <input type="text" name="leveltoreach" autocomplete="off" placeholder="<?php echo $olclang['example'];?> 82" class="submit cl"> <input type="hidden" value="cl" name="calct"> <button type="submit"><?php echo $olclang['submit'];?></button></div> 
	</form><!-- random <br> tags because yes --><br><br><br><br>
	<!-- s2l -->
	<h1 id="s2lmode"><?php echo $olclang['s2l-md'];?></h1>
	<form action="index.php" method="get">
		<div class="txt">
			<?php echo $olclang['s2l-tx1'];?> 
			<input type="text" name="l1" autocomplete="off" placeholder="<?php echo $olclang['example'];?> 82" class="submit cl">
			<?php echo $olclang['s2l-tx2'];?> 
			<input type="text" name="l2" autocomplete="off" placeholder="<?php echo $olclang['example'];?> 93" class="submit cl">
			<input type="hidden" value="s2l" name="calct">
			<button type="submit"><?php echo $olclang['submit'];?></button>
		</div> 
	</form>
	<h1><?php echo $olclang['footer-ttl'];?></h1>
	<div class="txt"><?php echo $olclang['footer'];?><?php echo $olclang['tran-cred'];?></div>
</body>
</html>