<?php 
echo "Zadanie # 4\n";
	$massX = array(4,3,12,8,5,9,5,1);
	$massY = array(5,4,6,3,15,7,10,4);
	$massL = array();
for ($i=0; $i<8; $i++)
{
	$massL[$i] = sqrt(($massX[$i]*$massX[$i])+($massY[$i]*$massY[$i]));
}
echo "Результат: ";
print_r($massL);
?>
