<?php								
	$nf = (string)$_POST['fn'];					
	if (file_exists("$nf.txt"))
	{
		echo"����� �����. ������ �1";
		echo('<br/>');
		$fd=fopen("$nf.txt", "r");
		$contents=fread($fd, filesize("$nf.txt"));
		$contents=str_replace("\r\n","<br>",$contents);
		fclose ($fd);
		print $contents;

		echo('<br/>');
		echo"����� �����. ������ �2 (� �������)";
		echo('<br/>');
		$text=file_get_contents("$nf.txt");
		print $text;

		echo('<br/>');
		echo"����� �����. ������ �3 (� �������)";
		echo('<br/>');
		readfile("$nf.txt");
		
	}
	else
	{
		echo"���� $nf.txt �� ����������";
	}
	echo('<br/>');
	echo"�������� ����� ��� ������������ (Poem)";
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
		echo"���� Poem.txt �� ����������";
	}
?>   