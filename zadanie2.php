<?php 
echo "Zadanie # 2\n";
	$a = (double)$_POST['Z2a'];
	$b = (double)$_POST['Z2b'];
	$x = ($a+$b)*$a;
echo "\nx = $x";
if ($a = $b)
{
	$y = $x/($a*$b);
}
else
{
	$y = $x*$x*($a-$b);
}
echo "\ny = $y";
if ($y <= 2)
{
	$z = $x/$y;
}
else
{
	$z = ($a*$b)/($x*$y);
}
echo "\nz = $z";
?>
