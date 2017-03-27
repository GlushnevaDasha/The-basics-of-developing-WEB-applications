<?php						
	$files=glob("*.txt");			
	$nf = (string)$_POST['fn'];		
				
	$flag = 0;				
	foreach($files as $key=>$temp)		
	{
		$temp = substr($temp,0,-4);	
		if (strcmp($temp,$nf) == 0)	
		{
			$flag++;		
		}
	}
	if ($flag == 0)				
	{
		if ($nf == "")
		{
			echo"Файл с пустым наименованием не существует";
		}
		else
		{
			echo"Файл $nf.txt не существует";
		}		
	}
	else
	{
		echo"Файл $nf.txt существует";
	}
	echo('<br/>');
	echo"Проверка файла для лабораторной (Poem)";
	echo('<br/>');
	if (file_exists("Poem.txt"))
	{
		echo"Файл Poem.txt существует";
	}
	else
	{
		echo"Файл Poem.txt не существует";
	}
?>   