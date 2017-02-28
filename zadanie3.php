<?php 
echo "Zadanie # 3\n";
	$a = (string)$_POST['Z31'];
	$b = (string)$_POST['Z32'];
	$c = (string)$_POST['Z33'];
	$d = (string)$_POST['Z34'];
	$x = "ДСФ";
	$f = 1;
	$mass = array($a,$b,$c,$d);
for ($i=0; $i<4; $i++)
{
	if ($mass[$i] == $x){
		echo "Факультет ДСФ присутствует";
		$f = 0;
	}
}
if ($f <> 0){
	echo "Факультет ДСФ отсутствует";
	}
?>
