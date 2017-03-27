<?php								
	$nf = (string)$_POST['fn'];					
	if (file_exists("$nf.txt"))
	{
		$size = filesize("$nf.txt");
		echo"Файл $nf.txt весит $size байт.";
		
	}
	else
	{
		echo"Файл $nf.txt не существует";
	}
	echo('<br/>');
	echo"Проверка файла для лабораторной (Poem)";
	echo('<br/>');
	if (file_exists("Poem.txt"))
	{
		$size = filesize("Poem.txt");
		echo"Файл Poem.txt весит $size байт.";
	}
	else
	{
		echo"Файл Poem.txt не существует";
	}
?>   