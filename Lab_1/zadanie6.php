<?php 
echo "Zadanie # 6\n";
	$mass = array(7,15,2,1,0,9,8,6,5,12,21,17,3,13,16);
$maxA = max($mass);
$minB = min($mass);
for ($i = 0; $i<15; $i++)
{
	if($maxA == $mass[$i]){ $maxI = $i;}
	if($minB == $mass[$i]){ $minI = $i;}
}
$t = $mass[$maxI];
$mass[$maxI] = $mass[$minI];
$mass[$minI] = $t;
echo "Результат: ";
print_r($mass);
?>
