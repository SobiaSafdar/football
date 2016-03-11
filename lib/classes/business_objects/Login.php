<?php
class Login extends util {
    
    function selectuser($strWhere,$fieldaArray=""){
        global $link;
        reset($fieldaArray);
        $strFields=$arr='';	
        
        foreach ($fieldaArray as $field){
        $strFields .=  "".$field . " ,";
        } 
        $strFields = substr($strFields, 0, strlen($strFields) - 1);	
        
        $sql = "SELECT $strFields FROM idavies_admin  WHERE $strWhere ";
        $result=mysqli_query($link,$sql)  or die(mysqli_error($link));
        if($result){
            while($row=mysqli_fetch_array($result)){
                    $arr[] = $row;
            }
        }
             else  { $arr=0; }
        return $arr; 
    }
    
    function insertuser($array){
        if($array){
            $inserted_id = util::insertRecord('idavies_admin',$array);
            return $inserted_id;                                 } 
        else { return 0;   }
       }

}