<?php 
echo "Zadanie # 1\n 
";
	$a = (double)$_POST['Z1a'];
	$b = (double)$_POST['Z1b'];
$K = ((($b-$a)*($b-$a))/(($b*$b)-$a))*(sin($a-$b));
echo "\nK = $K ";
$m = ($K+sqrt(abs($a*$b)))/(($K*$K*$K)-$b) ;
echo "\nm = $m ";
?>
