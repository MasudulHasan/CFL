<?php
	$dbHost = "localhost/XE";
    $dbUsername = "test-php";
    $dbPasswd = "123";
    $name="shakib al hasan";
        

        
        	$con = oci_connect("test-php","123", "localhost/XE");
            $stid = oci_parse($con, 'select P_ID from players where NAME = :name');
            //oci_bind_by_name($stid, ':id', $id);
            oci_bind_by_name($stid, ':name', $name);
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            //oci_free_statement($stid);
            //oci_close($con);
            $arrlength = count($rows);
            //print_r($rows);
            $var=$rows[0]['P_ID'];
            echo $var;
            $stid1 = oci_parse($con, 'DELETE FROM USERTEAM WHERE ID=7 AND P_ID=:var');
            //oci_bind_by_name($stid, ':U_ID.nextval',$ID);
            //oci_bind_by_name($stid1, ':id',$id);
            oci_bind_by_name($stid1, ':var',$var);
            oci_execute($stid1);
            oci_free_statement($stid1);
            oci_close($con);
            //foreach ($rows as $value) {
    			//echo "Value: $value <br />\n";
    		//}
?>
