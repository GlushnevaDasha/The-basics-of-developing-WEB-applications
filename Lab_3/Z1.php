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
			echo"���� � ������ ������������� �� ����������";
		}
		else
		{
			echo"���� $nf.txt �� ����������";
		}		
	}
	else
	{
		echo"���� $nf.txt ����������";
	}
	echo('<br/>');
	echo"�������� ����� ��� ������������ (Poem)";
	echo('<br/>');
	if (file_exists("Poem.txt"))
	{
		echo"���� Poem.txt ����������";
	}
	else
	{
		echo"���� Poem.txt �� ����������";
	}
?>   