<?php								
	$nf = (string)$_POST['fn'];					
	if (file_exists("$nf.txt"))
	{
		if (is_readable("$nf.txt"))
		{echo"���� $nf.txt �������� ��� ������";}
		else{echo"���� $nf.txt �� �������� ��� ������";}
		echo('<br/>');
		if (is_writable("$nf.txt"))
		{echo"���� $nf.txt �������� ��� ������";}
		else{echo"���� $nf.txt �� �������� ��� ������";}
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
		if (is_readable("Poem.txt"))
		{echo"���� Poem.txt �������� ��� ������";}
		else{echo"���� Poem.txt �� �������� ��� ������";}
		echo('<br/>');
		if (is_writable("Poem.txt"))
		{echo"���� Poem.txt �������� ��� ������";}
		else{echo"���� Poem.txt �� �������� ��� ������";}
	}
	else
	{
		echo"���� Poem.txt �� ����������";
	}

?>   