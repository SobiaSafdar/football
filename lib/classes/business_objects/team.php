<?php
class Team extends util {

    function select($strWhere,$fieldaArray=""){
        global $link;
        reset($fieldaArray);
        $strFields=$arr='';	
        foreach ($fieldaArray as $field){
            $strFields .=  "".$field . " ,";
        } 
        $strFields = substr($strFields, 0, strlen($strFields) - 1);	
        $sql = "SELECT $strFields FROM idavies_team  WHERE $strWhere ";
        $result=mysqli_query($link,$sql)  or die(mysqli_error($link));
        if($result){
            while($row=mysqli_fetch_array($result)){
                    $arr[] = $row;
            }
        }
        else  { $arr=0; }
        return $arr; 
    }
    
    function Delete($ID){
        if($ID){
            $deleted_id = util::deleteRecord('idavies_team',$ID);
            return $deleted_id;
        } else {
            return 0;
        }
    }
                
    function insert($array){
        if($array){
            $inserted_id = util::insertRecord('idavies_team',$array);
             return $inserted_id;   } 
        else { return 0;   }

    }

    function Update($where,$array){
        if($array){
            $updated_id = util::updateRecord('idavies_team',$where,$array);
            return $updated_id;
        } else {
            return 0;
        }
    }
}