<?php								
	$row_number = (integer)$_POST['fn'];
	$row_number--;					
	if (file_exists("Poem.txt"))
	{
		$file_out = file("Poem.txt"); // ��������� ���� ���� � ������
		unset($file_out[$row_number]);
		file_put_contents("Poem.txt", implode("", $file_out));
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