<?php
	$tel = array("�����" => 5,"����"=> 15,"�������" => 10);
	echo ('<font size="+2"><i>����� �������:</i></font><br />');
	foreach($tel as $key=>$temp)
	{
		echo("$key - $temp");
		echo('<br />');
	}
	echo('<br />');
	$tel['������'] = 250;
	$product = (string)$_POST['product'];
	$price = (double)$_POST['price'];
	$tel = $tel+array("$product"=>$price);
	echo ('<font size="+2"><i>���������� ����� �������:</i></font><br />');	
	foreach($tel as $key=>$temp)
	{
		echo("$key - $temp");
		echo('<br />');
	}
	echo('<br />');
	ksort($tel);
	echo ('<font size="+2"><i>��������������� ����� �������:</i></font><br />');	
	foreach($tel as $key=>$temp)
	{
		echo("$key - $temp");
		echo('<br />');
	}
	echo('<br />');
	$k=0;
	$s=0;
	echo ('<font size="+2"><i>�������� ����� �������:</i></font><br />');	
	foreach($tel as $key=>$temp)
	{
		$k++;
		$s=$s+$temp;
		echo("$key - $temp");
		echo('<br />');
	}
		echo('<br />');
		echo('<i>���������� �������:</i> ');echo($k);
		echo('<br />');
		echo('<i>�����:</i> ');echo($s);
		echo('<br />');

?>
