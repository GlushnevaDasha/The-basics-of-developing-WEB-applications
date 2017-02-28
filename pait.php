<?php 
// 
// ����� �������� 
// 
function pageHeader() 
{ 

    print("<html><head>"); 
    print("<title>Biorhythm with PHP3</title>"); 
    print("</head><body>"); 

} 

// 
// ������ �������� 
// 
function pageFooter() 
{ 

    print("</body></html>"); 

}  

// 
// ������� �������������� ���� �� �������������� ��������� 
// � ��������� ���������  (���������� ����) 
// 
function gregorianToJD($month, $day, $year) 
{ 
    // �� ������ ���� ��������  
    // Peter Baum, pbaum@capecod.net 

    if($month < 3) 
    { 
        $month = $month + 12; 
        $year = $year - 1; 
    } 

    $jd = $day + floor((153 * $month - 457) / 5) + 365 * $year 
          + floor($year / 4) - floor($year / 100) 
          + floor($year / 400) + 1721118.5; 

    return($jd); 

} 

// 
// ������� ��������� ������� �������� 
// ���������: ����� ���, ������ �������� � ���� 
// 
function drawRhythm($daysAlive, $period, $color) 
{ 
    global $daysToShow, $image, $diagramWidth, $diagramHeight; 

    // ��������� ���� � ������ ������� 
    $centerDay = $daysAlive - ($daysToShow / 2); 

    // ��������� ������� 
    $plotScale = ($diagramHeight - 25) / 2; 
    $plotCenter = ($diagramHeight - 25) / 2; 

    // ������ ������ 
    for($x = 0; $x <= $daysToShow; $x++) 
    { 
        // ���������� ���� ���������, ��������������� ������������� ��� 
        $phase = (($centerDay + $x) % $period) / $period * 2 * pi(); 
        //  ���������� �������� Y 
        $y = 1 - sin($phase) * (float)$plotScale + (float)$plotCenter; 

        // ������ ����� �� ���������� ����� �� �������  
        if($x > 0) 
            imageLine($image, $oldX, $oldY, $x * $diagramWidth / $daysToShow, 
            $y, $color); 
  
        // ��������� ������� ���������� ��� ������������� � ��������� ������� ����� 
        $oldX = $x * $diagramWidth / $daysToShow; 
        $oldY = $y; 
    } 

} 

// 
// ---- MAIN PROGRAM START ---- 


// ���������, ���� �� ������� ���� ��������. 
// ���� ���, ���������� ����� ��� ����� ���� 
if(!isset($birthdate)) 
{ 
    pageHeader(); 

    ?> 
     <form method="post" action="<?php print(basename($PHP_SELF)); ?>"> 
     Please enter your birthday:<br> 
     <input type="text" name="birthdate" 
            value="MM/DD/YYYY"><input type="submit" value="OK!"> 
     </form> 
    <?php 

    pageFooter(); 

    exit(); 
} 
    
// �������� ����, ����� � ��� 
$birthMonth = substr($birthdate, 0, 2); 
$birthDay = substr($birthdate, 3, 2); 
$birthYear = substr($birthdate, 6, 4); 

// ��������� ������������ �����   
if(!checkDate($birthMonth, $birthDay, $birthYear)) 
{ 
    pageHeader(); 

    print("The date '$birthMonth/$birthDay/$birthYear' is invalid."); 

    pageFooter(); 

    exit(); 
} 
    
// ��������� ������� (���������� ����������) 
$diagramWidth = 710; 
$diagramHeight = 400;     
$daysToShow = 30;        

//����������, ������� ���� ������� ������ �� ������� ���� ��������� ��������� ���������. 
$daysGone = abs(gregorianToJD($birthMonth, $birthDay, $birthYear) 
                - gregorianToJD(date( "m"), date( "d"), date( "Y"))); 

// ������ ����������� 
$image = imageCreate($diagramWidth, $diagramHeight); 

// ������������ ������������ ����� 
$colorBackgr       = imageColorAllocate($image, 192, 192, 192); 
$colorForegr       = imageColorAllocate($image, 255, 255, 255); 
$colorGrid         = imageColorAllocate($image, 0, 0, 0); 
$colorCross        = imageColorAllocate($image, 0, 0, 0); 
$colorPhysical     = imageColorAllocate($image, 0, 0, 255); 
$colorEmotional    = imageColorAllocate($image, 255, 0, 0); 
$colorIntellectual = imageColorAllocate($image, 0, 255, 0); 

// �������� ������ ���� 
imageFilledRectangle($image, 0, 0, $diagramWidth - 1, $diagramHeight - 1, $colorBackgr);  

// ��������� ��������� ���� ������� 
$nrSecondsPerDay = 60 * 60 * 24; 
$diagramDate = time() - ($daysToShow / 2 * $nrSecondsPerDay) + $nrSecondsPerDay; 

for ($i = 1; $i < $daysToShow; $i++) 
{ 
    $thisDate = getDate($diagramDate); 
    $xCoord = ($diagramWidth / $daysToShow) * $i; 

    // ������ ������� �� ��� � ����� ��� 
    imageLine($image, $xCoord, $diagramHeight - 25, $xCoord, 
              $diagramHeight - 20, $colorGrid); 
    imageString($image, 3, $xCoord - 5, $diagramHeight - 16, 
                $thisDate[ "mday"], $colorGrid); 

    $diagramDate += $nrSecondsPerDay; 
} 

// ������ ����� 
imageRectangle($image, 0, 0, $diagramWidth - 1, $diagramHeight - 20, 
               $colorGrid); 

// ������ ��� 
imageLine($image, 0, ($diagramHeight - 20) / 2, $diagramWidth, 
          ($diagramHeight - 20) / 2, $colorCross); 
imageLine($image, $diagramWidth / 2, 0, $diagramWidth / 2, $diagramHeight - 20, 
          $colorCross); 

// ������� ����� 
imageString($image, 3, 10, 10,  "Birthday: $birthDay.$birthMonth.$birthYear", 
            $colorCross); 
imageString($image, 3, 10, 26,  "Today:    ".  date(  "d.m.Y"),  $colorCross); 
imageString($image, 3, 10, $diagramHeight - 42,  "Physical", $colorPhysical); 
imageString($image, 3, 10, $diagramHeight - 58,  "Emotional", $colorEmotional); 
imageString($image, 3, 10, $diagramHeight - 74,  "Intellectual", 
            $colorIntellectual); 

// ������ ��� ������� � ���������������� ����������� 
drawRhythm($daysGone, 23, $colorPhysical); 
drawRhythm($daysGone, 28, $colorEmotional); 
drawRhythm($daysGone, 33, $colorIntellectual); 

// ���������� ��������� Content-type 
//header("Content-type:  image/gif"); 
header("Content-type:  image/png"); 

// ������ ������������� ����� 
imageInterlace($image, 1); 

// ������ ���� ���� ���������� 
imageColorTransparent($image, $colorBackgr); 

// � ������� ����������� 
//imageGIF($image); 
imagePNG($image); 

?> 