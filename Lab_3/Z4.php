<?php								
	$nf = (string)$_POST['fn'];					
	if (file_exists("$nf.txt"))
	{
		echo"Вывод файла. Способ №1";
		echo('<br/>');
		$fd=fopen("$nf.txt", "r");
		$contents=fread($fd, filesize("$nf.txt"));
		$contents=str_replace("\r\n","<br>",$contents);
		fclose ($fd);
		print $contents;

		echo('<br/>');
		echo"Вывод файла. Способ №2 (В строчку)";
		echo('<br/>');
		$text=file_get_contents("$nf.txt");
		print $text;

		echo('<br/>');
		echo"Вывод файла. Способ №3 (В строчку)";
		echo('<br/>');
		readfile("$nf.txt");
		
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
		echo('<br/>');
		$fd=fopen("Poem.txt", "r");
		$contents=fread($fd, filesize("Poem.txt"));
		$contents=str_replace("\r\n","<br>",$contents);
		fclose ($fd);
		print $contents;
	}
	else
	{
		echo"Файл Poem.txt не существует";
	}
?>   