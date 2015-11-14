<?php

class User {
    
    public function _construct() {
    }

    public function addUser($name,$pass,$email,$teamname){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";
        $ID=U_ID.nextval;
        //echo '$ID'; 
        $sub=45;
        $buget=100000;
        $p=0;

        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'INSERT INTO USERS(ID,USERNAME,EMAIL,PASSWORD,USER_TEAM_NAME,NUMBER_OF_SUBSTITUTION,BUDGET,POINT) VALUES (U_ID.nextval,:name,:mail,:pass,:tname,:sub,:buget,:p)');
            oci_bind_by_name($stid, ':U_ID.nextval',$ID);
            oci_bind_by_name($stid, ':name', $name);
            oci_bind_by_name($stid, ':pass', $pass);
            oci_bind_by_name($stid, ':mail', $email);
            oci_bind_by_name($stid, ':tname', $teamname);
            oci_bind_by_name($stid, ':sub', $sub);
            oci_bind_by_name($stid, ':buget', $buget);
            oci_bind_by_name($stid, ':p', $p);
            oci_execute($stid);
            oci_free_statement($stid);
            oci_close($con);
            //session_start();
            //$_SESSION['name'] = $_POST['name'];
            return true;
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }
    
    public function getUsers($id) {
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";

        try { 
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'SELECT * FROM USERS where ID=:id');
            oci_bind_by_name($stid, ':id', $id);
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            oci_free_statement($stid);
            oci_close($con);
            return $rows;
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }

    public function getplayer() {
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";

        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'SELECT * FROM players');
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            oci_free_statement($stid);
            oci_close($con);
            return $rows;
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }
    public function changesquad() {
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";

        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'SELECT NAME,TYPE ,PRICE FROM players order by P_ID');
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            oci_free_statement($stid);
            oci_close($con);
            return $rows;
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }

    public function getuserteam($id) {
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";

        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'SELECT UPPER(p.name)as NAME,p.url,p.P_ID from players p,userteam u where u.ID=:id AND u.P_ID=p.P_ID order by p.P_ID');
            oci_bind_by_name($stid, ':id', $id);
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            oci_free_statement($stid);
            oci_close($con);
            return $rows;
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }


    public function checkLogin($name, $password) {
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";

        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'SELECT * FROM USERS where USERNAME=:name and PASSWORD=:pwd_bv');
            oci_bind_by_name($stid, ':name', $name);
            oci_bind_by_name($stid, ':pwd_bv', $password);
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            oci_free_statement($stid);
            oci_close($con);
            $arrlength = count($rows);
            if($arrlength==1)return $rows[0]['ID'];
            else return -1;
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }

    public function checkifexists($name,$id) {
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";
        $pname=strtoupper($name);
        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            //$stid = oci_parse($con, 'SELECT u.ID from PLAYERS p,USERTEAM u where p.NAME = :name AND u.P_ID = p.P_ID and u.ID = :user');
            //oci_bind_by_name($stid, ':name', $name);
            //oci_bind_by_name($stid, ':user', $user);
            $stid = oci_parse($con, 'SELECT u.ID from players p,userteam u where u.ID=:id and u.P_ID=p.P_ID and UPPER(p.NAME) = \''.$pname.'\'');
            oci_bind_by_name($stid, ':id', $id);
            //oci_bind_by_name($stid, ':name', $name);
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            oci_free_statement($stid);
            oci_close($con);
            $arrlength = count($rows);
            //echo $arrlength;
            if($arrlength>=1)return true;
            else return false;
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }
    public function checkplayernumber($id){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";
        

        try {
            $con = oci_connect("test-php","123", "localhost/XE");
            $stid = oci_parse($con, 'select * from userteam where ID = :id');
            //oci_bind_by_name($stid, ':id', $id);
            oci_bind_by_name($stid, ':id', $id);
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            oci_free_statement($stid);
            //oci_close($con);
            oci_close($con);
            $arrlength = count($rows);
            //echo $arrlength;
            if($arrlength<11)return true;
            else false;
            
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }
    public function adduserteamplayer($name,$id){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";
        $pname=strtoupper($name);
        

        try {
            $con = oci_connect("test-php","123", "localhost/XE");
            $stid = oci_parse($con, 'SELECT P_ID from PLAYERS where UPPER(NAME) = \''.$pname.'\'');
            //oci_bind_by_name($stid, ':id', $id);
            //oci_bind_by_name($stid, ':name', $name);
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            oci_free_statement($stid);
            //oci_close($con);
            $arrlength = count($rows);
            //print_r($rows);
            $var=$rows[0]['P_ID'];
            //echo $var;
            $stid1 = oci_parse($con, 'INSERT INTO USERTEAM (ID,P_ID) VALUES (:id,:var)');
            //oci_bind_by_name($stid, ':U_ID.nextval',$ID);
            oci_bind_by_name($stid1, ':id',$id);
            oci_bind_by_name($stid1, ':var',$var);
            oci_execute($stid1);
            oci_free_statement($stid1);
            oci_close($con);
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }

    public function removeplayer($name,$id){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";
        $pname=strtoupper($name);

        try {
            $con = oci_connect("test-php","123", "localhost/XE");
            $stid = oci_parse($con, 'SELECT P_ID from PLAYERS where UPPER(NAME) = \''.$pname.'\'');
            //oci_bind_by_name($stid, ':id', $id);
            //oci_bind_by_name($stid, ':name', $name);
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            oci_free_statement($stid);
            //oci_close($con);
            $arrlength = count($rows);
            //echo $arrlength; 
            //print_r($rows);
            $var=$rows[0]['P_ID'];
            //echo $var;
            $stid1 = oci_parse($con,'DELETE FROM USERTEAM WHERE ID=:id AND P_ID=:var');
            //oci_bind_by_name($stid, ':U_ID.nextval',$ID);
            oci_bind_by_name($stid1, ':id',$id);
            oci_bind_by_name($stid1, ':var',$var);
            oci_execute($stid1);
            oci_free_statement($stid1);
            oci_close($con);
        }

        catch(Exception $e)  {
            //echo "hwehrhwherhhwerhwehrh";
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }


    public function getpoint($id){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";
        

        try {
            $con = oci_connect("test-php","123", "localhost/XE");
            $stid = oci_parse($con, 'SELECT TOTALL_POINT from rank where ID= :id');
            oci_bind_by_name($stid, ':id', $id);
            //oci_bind_by_name($stid, ':name', $name);
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            oci_free_statement($stid);
            //oci_close($con);
            $arrlength = count($rows);
            //echo $arrlength; 
            //print_r($rows);
            $var=$rows[0]['TOTALL_POINT'];
            //echo $var;
            oci_close($con);
            return $var;
        }

        catch(Exception $e)  {
            //echo "hwehrhwherhhwerhwehrh";
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }



    public function changename($id,$name){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";

        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'UPDATE USERS SET USERNAME = :p WHERE ID = :n');
            oci_bind_by_name($stid, ':n', $id);
            oci_bind_by_name($stid, ':p', $name);
            oci_execute($stid);
            oci_free_statement($stid);
            oci_close($con);
            
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }

    public function changeemail($id,$name){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";

        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'UPDATE USERS SET EMAIL = :p WHERE ID = :n');
            oci_bind_by_name($stid, ':n', $id);
            oci_bind_by_name($stid, ':p', $name);
            oci_execute($stid);
            oci_free_statement($stid);
            oci_close($con);
            
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }

    public function changepassword($id,$name){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";

        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'UPDATE USERS SET PASSWORD = :p WHERE ID = :n');
            oci_bind_by_name($stid, ':n', $id);
            oci_bind_by_name($stid, ':p', $name);
            oci_execute($stid);
            oci_free_statement($stid);
            oci_close($con);
            
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }

    public function changetname($id,$name){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";

        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'UPDATE USERS SET USER_TEAM_NAME = :p WHERE ID = :n');
            oci_bind_by_name($stid, ':n', $id);
            oci_bind_by_name($stid, ':p', $name);
            oci_execute($stid);
            oci_free_statement($stid);
            oci_close($con);
            
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }

}
