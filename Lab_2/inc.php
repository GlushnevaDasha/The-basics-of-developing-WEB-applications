<?php
	$tel = array("Ручка" => 5,"Диск"=> 15,"Тетрадь" => 10);
	echo ('<font size="+2"><i>Прайс товаров:</i></font><br />');
	foreach($tel as $key=>$temp)
	{
		echo("$key - $temp");
		echo('<br />');
	}
	echo('<br />');
	$tel['Бумага'] = 250;
	$product = (string)$_POST['product'];
	$price = (double)$_POST['price'];
	$tel = $tel+array("$product"=>$price);
	echo ('<font size="+2"><i>Измененный прайс товаров:</i></font><br />');	
	foreach($tel as $key=>$temp)
	{
		echo("$key - $temp");
		echo('<br />');
	}
	echo('<br />');
	ksort($tel);
	echo ('<font size="+2"><i>Отсортированный прайс товаров:</i></font><br />');	
	foreach($tel as $key=>$temp)
	{
		echo("$key - $temp");
		echo('<br />');
	}
	echo('<br />');
	$k=0;
	$s=0;
	echo ('<font size="+2"><i>Итоговый прайс товаров:</i></font><br />');	
	foreach($tel as $key=>$temp)
	{
		$k++;
		$s=$s+$temp;
		echo("$key - $temp");
		echo('<br />');
	}
		echo('<br />');
		echo('<i>Количество позиций:</i> ');echo($k);
		echo('<br />');
		echo('<i>Сумма:</i> ');echo($s);
		echo('<br />');

?>
