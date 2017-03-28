<?php 
        $BDlocation = "localhost:3306";
        $BDname = "agency2";
        $BDuser = "root";
        $BDpasswd = "";
        $BDcnx = @mysql_connect($BDlocation, $BDuser, $BDpasswd);
        if (!$BDcnx) {
            echo "No connaction";
            exit();
        } 
        if(!@mysql_select_db($BDname,$BDcnx)) {
            echo "No";
            exit();
        }
        $ver = mysql_query("select version()");
        if(!$ver){
            echo "error";
            exit();
        }
        $ver1 = mysql_query("SELECT * FROM `client`");
        if(! $ver1){
            throw new My_Db_Exception('Database error: ' . mysql_error());
        }
        while($ve = mysql_fetch_assoc($ver1)) {
            echo "ID: " . $ve["ID"]. " - Surname: " . $ve["Name"]."<br>";
        }      
    ?>