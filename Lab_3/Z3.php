<?php								
	$nf = (string)$_POST['fn'];					
	if (file_exists("$nf.txt"))
	{
		$size = filesize("$nf.txt");
		echo"���� $nf.txt ����� $size ����.";
		
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
		$size = filesize("Poem.txt");
		echo"���� Poem.txt ����� $size ����.";
	}
	else
	{
		echo"���� Poem.txt �� ����������";
	}
?>   