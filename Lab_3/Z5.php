<?php								
	$strw = (string)$_POST['wstr'];					
	if (file_exists("Poem.txt"))
	{
		$fd=fopen("Poem.txt","a");  
		fwrite($fd, "\r\n" . $strw);  
		fclose($fd);
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