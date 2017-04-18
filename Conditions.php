<html>
	<head>
	<title>WEATHER APP</title>
	</head>
	
	<body>
	
<?php
    require 'GetWeather.php';
    error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
?>

<div align=center>
<?php
		echo "<br>";
		echo "<table width = 900 border =1>
		<tr>
		<td align=center>Day : $haria<br>
		tanggal : $tgla, $blna $thna<br>
		$cona<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pnga . ".gif'><br>
		Suhu Berkisar $sla C- $sha C</td>
		
		<td align=center>Day : $harib<br>
		tanggal : $tglb, $blnb $thnb<br>
		$conb<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngb . ".gif'><br>
		Suhu Berkisar $slb C- $shb C</td>
		
		<td align=center>Day : $haric<br>
		tanggal : $tglc, $blnc $thnc<br>
		$conc<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngc . ".gif'><br>
		Suhu Berkisar $slc C- $shc C</td>
		
	
		
		<td align=center>Day : $harid<br>
		tanggal : $tgld, $blnd $thnd<br>
		$cond<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngd . ".gif'><br>
		Suhu Berkisar $sld C- $shd C</td>
		
		<td align=center>Day : $harie<br>
		tanggal : $tgle, $blne $thne<br>
		$cone<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pnge . ".gif'><br>
		Suhu Berkisar $sle C- $she C</td>
		
		<td align=center>Day : $harif<br>
		tanggal : $tglf, $blnf $thnf<br>
		$conf<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngf . ".gif'><br>
		Suhu Berkisar $slf C- $shf C</td>
		
		
		
		<td align=center>Day : $harig<br>
		tanggal : $tglg, $blng $thng<br>
		$cong<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngg . ".gif'><br>
		Suhu Berkisar $slg C- $shg C</td>
		
		<td align=center>Day : $harih<br>
		tanggal : $tglh, $blnh $thnh<br>
		$conh<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngh . ".gif'><br>
		Suhu Berkisar $slh C- $shh C</td>
		
		<td align=center>Day : $harii<br>
		tanggal : $tgli, $blni $thni<br>
		$coni<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngi . ".gif'><br>
		Suhu Berkisar $sli C- $shi C</td>
		
		</tr>
		</table>";
?>
</div>
</html>