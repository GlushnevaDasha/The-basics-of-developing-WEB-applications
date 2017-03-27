<?php								
	$nf = (string)$_POST['fn'];					
	if (file_exists("$nf.txt"))
	{
		if (is_readable("$nf.txt"))
		{echo"Файл $nf.txt доступен для чтения";}
		else{echo"Файл $nf.txt не доступен для чтения";}
		echo('<br/>');
		if (is_writable("$nf.txt"))
		{echo"Файл $nf.txt доступен для записи";}
		else{echo"Файл $nf.txt не доступен для записи";}
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
		if (is_readable("Poem.txt"))
		{echo"Файл Poem.txt доступен для чтения";}
		else{echo"Файл Poem.txt не доступен для чтения";}
		echo('<br/>');
		if (is_writable("Poem.txt"))
		{echo"Файл Poem.txt доступен для записи";}
		else{echo"Файл Poem.txt не доступен для записи";}
	}
	else
	{
		echo"Файл Poem.txt не существует";
	}

?>   