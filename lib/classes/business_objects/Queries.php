<?php
class Queries extends util {

    function select($table,$strWhere,$fieldaArray=""){
			global $link;
			reset($fieldaArray);
			$strFields=$arr='';	
		foreach ($fieldaArray as $field){
			$strFields .=  "".$field . " ,";
		} 
		$strFields = substr($strFields, 0, strlen($strFields) - 1);	
              $sql = "SELECT $strFields FROM $table  WHERE $strWhere ";
			$result=mysqli_query($link,$sql)  or die(mysqli_error($link));
                        if($result){
                            while($row=mysqli_fetch_array($result)){
                                    $arr[] = $row;
                            }
                        }
			     else  { $arr=0; }
                       
                             return $arr; 

		}
    

                
                
                function Delete($table,$ID){
                    if($ID){
                            $deleted_id = util::deleteRecord($table,$ID);
                            return $deleted_id;
                    } else {
                            return 0;
                    }
		}
                
    function insert($table,$array){

			if($array){
                                    $inserted_id = util::insertRecord($table,$array);
                                     return $inserted_id;                                 } 
                        else { return 0;   }

                           }

function Update($table,$where,$array){
		if($array){
			$updated_id = util::updateRecord($table,$where,$array);
			return $updated_id;
		} else {
			return 0;
		}
                                }
     function getstaffdetail($strWhere,$fieldaArray=""){
			global $link;
			reset($fieldaArray);
			$strFields=$arr='';	
		foreach ($fieldaArray as $field){
			$strFields .=  "".$field . " ,";
		} 
		$strFields = substr($strFields, 0, strlen($strFields) - 1);	
              $sql = "SELECT $strFields FROM 
                      af_staff as s 
                      join af_subject as sub
                      on s.staff_specialist_subject=sub.subject_id
                      join af_designation  as d
                      on s.staff_designation=d.designation_id
                      join af_institute  as ins
                      on s.staff_institute_id=ins.institute_id
                       join af_status as status
                       on status.status_id=s.staff_status
                        WHERE $strWhere ";
			$result=mysqli_query($link,$sql)  or die(mysqli_error($link));
                        if($result){
                            while($row=mysqli_fetch_array($result)){
                                    $arr[] = $row;
                            }
                        }
			     else  { $arr=0; }
                       
                             return $arr; 

		}
 
}