<?php

class admin {
    
    public function _construct() {
    }

    public function addplayer($name,$pass,$email,$teamname){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";
        $con = oci_connect("test-php","123", "localhost/XE");    
        $stid = oci_parse($con, 'SELECT * FROM PLAYERS order by P_ID');
        oci_execute($stid);
        $rows = array();
        while($r = oci_fetch_assoc($stid)) {
            $rows[] = $r;
        }
        oci_free_statement($stid);
        oci_close($con);
        $arrlength = count($rows);
        $temp=0;
        for ($x = 0; $x <$arrlength; $x++) {
            $temp=$rows[$x]['P_ID'];
        } 
        //echo $temp;
        $ID=$temp+1;
        //echo $ID; 
        $sub="Bangladesh";
        $buget=0;

        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'INSERT INTO PLAYERS (P_ID,NAME,TEAM,TYPE,PRICE,MAT,INNS,RUNS,HS,AVG,SR,HUN,FIFTY,FOUR,SIXS,BALLS,RUNS_G,WKTS,BBI,B_AVG,ECON,B_SR,FOURW,FIVEW,CT,STMP,RUNOUT,URL) VALUES (:id,:name,:tname,:role,:price,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:zero,:sub)');
            oci_bind_by_name($stid, ':id',$ID);
            oci_bind_by_name($stid, ':name', $name);
            oci_bind_by_name($stid, ':sub', $sub);
            oci_bind_by_name($stid, ':tname', $teamname);
            oci_bind_by_name($stid, ':role', $pass);
            oci_bind_by_name($stid, ':price', $email);
            oci_bind_by_name($stid, ':zero', $buget);
            oci_execute($stid);
            oci_free_statement($stid);
            oci_close($con);
            return true;
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    }


    public function addmatchplayer($m_Id,$teamname,$run,$ball,$four,$six,$sr,$wc,$bball,$r_g,$eco,$ct,$st,$rout){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";
        $pname=strtoupper($teamname);
        $con = oci_connect("test-php","123", "localhost/XE");    
        $stid = oci_parse($con, 'SELECT P_ID FROM PLAYERS where UPPER(NAME) = \''.$pname.'\'');
        oci_execute($stid);
        $rows = array();
        while($r = oci_fetch_assoc($stid)) {
            $rows[] = $r;
        }
        oci_free_statement($stid);
        oci_close($con);
        $temp=$rows[0]['P_ID'];
        //echo $temp;

        

        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'INSERT INTO MATCH (M_ID,P_ID,RUNS,SR,FOUR,SIXS,BALLS,RUNS_G,WKTS,ECON,B_SR,CT,STMP,RUNOUT) VALUES (:m_Id,:teamname,:run,:sr,:four,:six,:ball,:r_g,:wc,:eco,:bball,:ct,:st,:rout)');
            oci_bind_by_name($stid, ':m_Id',$m_Id);
            oci_bind_by_name($stid, ':teamname', $temp);
            oci_bind_by_name($stid, ':run', $run);
            oci_bind_by_name($stid, ':ball', $ball);
            oci_bind_by_name($stid, ':four', $four);
            oci_bind_by_name($stid, ':six', $six);
            oci_bind_by_name($stid, ':sr', $sr);
            oci_bind_by_name($stid, ':wc', $wc);
            oci_bind_by_name($stid, ':bball',$bball);
            oci_bind_by_name($stid, ':r_g',$r_g);
            oci_bind_by_name($stid, ':eco',$eco);
            oci_bind_by_name($stid, ':ct',$ct);
            oci_bind_by_name($stid, ':st',$st);
            oci_bind_by_name($stid, ':rout',$rout);
            oci_execute($stid);
            oci_free_statement($stid);

            $stid = oci_parse($con, 'begin valuset(:p2); end;');
            oci_bind_by_name($stid, ':p2', $p2);
            oci_execute($stid);
            oci_free_statement($stid);
            $stid = oci_parse($con, 'begin updatetable; end;');
            oci_execute($stid);
            oci_free_statement($stid);
            
            $stid = oci_parse($con, 'SELECT TOTALL_POINT FROM playermatchpoint where M_ID=:m_id and P_ID = :temp');
            oci_bind_by_name($stid, ':m_Id',$m_Id);
            oci_bind_by_name($stid, ':temp', $temp);
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            $p3=$rows[0]['TOTALL_POINT'];
            $this-> updatetable($m_Id,$temp,$p3);
            oci_close($con);
            return true;
        }

        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }
    } 


    



    public function getmatchplayer($name,$name1){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";
        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'SELECT * FROM PLAYERS where UPPER(TEAM)=UPPER(:name )or UPPER(TEAM)=UPPER(:name1)');
            oci_bind_by_name($stid, ':name', $name);
            oci_bind_by_name($stid, ':name1', $name1);
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

    public function getuserplayer($P_ID,$m_Id){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";
        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'SELECT UNIQUE(ID) from usermatchpoint where M_ID=:m_id and ID=any(SELECT ID FROM userteam where P_ID=:P_ID)');
            oci_bind_by_name($stid, ':m_id', $m_Id);
            oci_bind_by_name($stid, ':P_ID',$P_ID);
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


    public function updaterank(){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";
        try {
            $this->updateusertable();
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'SELECT u.ID,sum(u.TOTALL_POINT) as tpoint 
                                        from usermatchpoint u
                                        group by u.ID');
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            oci_free_statement($stid);
            $arrlength=count($rows);
            echo $arrlength."\n\n";
            //$userlist=array(array());
            for($x=0;$x<$arrlength;$x++){
                $m=$rows[$x]['ID'];
                echo $m.PHP_EOL;
                $n=$rows[$x]['TPOINT'];
                $stid1 = oci_parse($con, 'UPDATE rank SET TOTALL_POINT= :p where ID= :m');
               
                oci_bind_by_name($stid1, ':m', $m);
                oci_bind_by_name($stid1, ':p', $n);
                oci_execute($stid1);

                
            }
            oci_close($con);
            return $rows;
        }
        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }

        
    }


    public function updateusertable(){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";
        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'SELECT ID from users');
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            oci_free_statement($stid);
            $arrlength=count($rows);
            echo $arrlength."\n\n";
            //$userlist=array(array());
            for($x=0;$x<$arrlength;$x++){
                $m=$rows[$x]['ID'];
                echo $m.PHP_EOL;
                $userlist=array();
                $userlist=$this->updatetable($m);
            }
            oci_close($con);
            return $rows;
            
        }
        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }

        
    }


    public function updatetable($Id){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";
        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'SELECT p.M_ID,sum(p.TOTALL_POINT) as tpoint 
                                        from playermatchpoint p, userteam u
                                        where u.P_ID=p.P_ID and ID=:id
                                        group by p.M_ID');
            oci_bind_by_name($stid, ':id', $Id);
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            oci_free_statement($stid);
            $arrlength=count($rows);
            echo $arrlength."\n\n";
            //$userlist=array(array());
            for($x=0;$x<$arrlength;$x++){
                $n=$rows[$x]['TPOINT'];
                $m=$rows[$x]['M_ID'];
                //echo "dsfs".$n."\n";
                $con = oci_connect("test-php","123", "localhost/XE");    
                $stid = oci_parse($con, 'SELECT * from usermatchpoint where ID=:id and M_ID=:m');
                oci_bind_by_name($stid, ':id', $Id);
                oci_bind_by_name($stid, ':m', $m);
                oci_execute($stid);
                $rows1 = array();
                while($r = oci_fetch_assoc($stid)) {
                    $rows1[] = $r;
                }
                $arrlength1=count($rows1);
                echo "ARRLENTH: ".$arrlength1."\n"."\n";
                if($arrlength1==0){
                    $con = oci_connect("test-php","123", "localhost/XE");    
                    $stid = oci_parse($con, 'INSERT INTO usermatchpoint (ID,M_ID,TOTALL_POINT) VALUES (:id,:m,:tp)');
                    oci_bind_by_name($stid,':id',$Id);
                    oci_bind_by_name($stid,':m',$m);
                    oci_bind_by_name($stid,':tp',$n);
                    oci_execute($stid);
                }
                else{

                    $stid1 = oci_parse($con, 'UPDATE usermatchpoint SET TOTALL_POINT= :p where ID= :id and M_ID= :m');
                    oci_bind_by_name($stid1, ':id', $Id);
                    oci_bind_by_name($stid1, ':m', $m);
                    oci_bind_by_name($stid1, ':p', $n);
                    oci_execute($stid1);

                }
                
            }
            oci_close($con);
            return $rows;
            
        }
        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }

        
    }


    public function matchstat($Id){
        $dbHost = "localhost/XE";
        $dbUsername = "test-php";
        $dbPasswd = "123";
        try {
            $con = oci_connect("test-php","123", "localhost/XE");    
            $stid = oci_parse($con, 'SELECT mt.TEAM,p.NAME,m.TOTALL_POINT   
                                    from players p,userteam u,playermatchpoint m,matchteam mt
                                    where (p.P_ID=m.P_ID) and (u.P_ID=m.P_ID) and (u.ID=:id) and (mt.m_Id=m.m_Id)
                                    order by m.M_ID');
            oci_bind_by_name($stid, ':id', $Id);
            oci_execute($stid);
            $rows = array();
            while($r = oci_fetch_assoc($stid)) {
                $rows[] = $r;
            }
            oci_free_statement($stid);
            $arrlength=count($rows);
            //echo $arrlength."\n\n";
            //$userlist=array(array());
           
            oci_close($con);
            return $rows;
            
        }
        catch(Exception $e)  {
            throw new Exception("Error in adduser", $e->getMessage());            
        }

        
    }
}
