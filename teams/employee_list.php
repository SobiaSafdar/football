<?php 
ob_start();
session_start();
if(!isset($_SESSION['id'])) 
{ header("Location: index.php"); }
include('partials/header.php'); ?>

<script type="text/javascript">
	function del(bid){
		var answer = confirm ("Are you sure want to Delete this record?");
		if (answer)
			window.location="employee_list.php?del="+bid;
	}
	function status(stat,id){
		var answer = confirm ("Are you sure want to Change its status?");
		if (answer)
			window.location="employee_list.php?status="+stat+"&id="+id;
	}
</script>



                <div class="row">
                 <div class="col-mod-12">

                  <ul class="breadcrumb">
                   <li><a href="dashboard.php">Dashboard</a></li>
                   <li><a href="#">Employee</a></li>
                   <li class="active">Employee List</li>
                   
                 </ul>
                 
                
            </div>
          </div>

  
        <?php
if(isset($_REQUEST['status']))	
{	

	 $id = $_REQUEST['id'];
	 $status = $_REQUEST['status'];
	
	$query = "update app_form set app_form_status='$status' WHERE app_form_code = '$id' ";
	 $rs  = mysql_query($query) or die(mysql_error());
	 if($rs==1)
	 {
		 ?>
        <div class="alert alert-info alert-dismissable">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           <?php echo $id; ?> status updated
         </div>
         
     	 <?php
		header('refresh:0, url=employee_list.php');
	}
}
if(isset($_REQUEST['del']))	
{	

	 $cancel = $_REQUEST['del'];
	
	$query = "delete from app_form WHERE app_form_code = '$cancel' ";
	$query1 = "delete from bankdata WHERE bankdata_code = '$cancel' ";
	$query2 = "delete from medicalform WHERE medicalform_code = '$cancel' ";
 	
 $rs  = mysql_query($query) or die(mysql_error());
 $rs1  = mysql_query($query1) or die(mysql_error());
 $rs2  = mysql_query($query2) or die(mysql_error());
	 if($rs==1)
	 {
		 ?>
        <div class="alert alert-info alert-dismissable">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           Employee Record Deleted
         </div>
         
     	 <?php
		header('refresh:2, url=employee_list.php');
	}
}
?>
<div class="row">
           <div class="col-md-12">
            <div class="panel">
             <div class="panel-heading text-primary">
              <h3 class="panel-title">
               <i class="fa fa-pencil-square"></i>
               Employee List
               <span class="pull-right">
                <div class="btn-group code">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Classes used"><i class="fa fa-code"></i></a>
                 <ul class="dropdown-menu pull-right list-group" role="menu">
                  <li class="list-group-item"><code>.table-bordered</code></li>
                  <li class="list-group-item"><code>.table-hover</code></li>
                  <li class="list-group-item"><code>.table-striped</code></li>
                  <li class="list-group-item"><code>.display</code></li>
                </ul>
              </div>
              <a href="#" class="panel-minimize"><i class="fa fa-chevron-up"></i></a>
              <a href="#" class="panel-close"><i class="fa fa-times"></i></a>
            </span>
          </h3>
        </div>
        <div class="panel-body">


<table  class="table table-bordered table-hover table-striped display" id="example" >
           <thead>
            <tr>
             <th>#</th>
             <th>ID</th>
             <th>Name</th>
             <th>Email</th>
             <th>Attachments</th>
             <th colspan=2>Status</th>
             <th>Options</th>
           </tr>
         </thead>


         <tbody>

<?php 
$i=1;
		include "connection.php";
		$sql = "select * from app_form join medicalform join bankdata
		where 
		app_form.app_form_code=medicalform.medicalform_code and
		app_form.app_form_code=bankdata.bankdata_code 
		 order by app_form_id asc" ;
		$rs = mysql_query($sql) or die(mysql_error()); 
		if(mysql_num_rows($rs)>0)
	
{		while($row = mysql_fetch_array($rs))
{

	$all_images=unserialize($row['app_form_signed_form']);
		$status=($row['app_form_status']);
?>
             <tr class="gradeC">
               <td><?php echo $i; ?></td>
               <td><?php echo $row['app_form_code']; ?></td>
               <td><?php echo $row['app_form_first_name']; ?></td>
               <td class="center"><?php echo $row['app_form_email']; ?></td>

 <td>
	<div class="btn-group">							
<button type="button" class="btn btn-info btn-xs dropdown-toggle btn-animate-demo" data-toggle="dropdown">Attachments <span class="caret"></span>
</button>
								<ul class="dropdown-menu" role="menu">
<?php	if(isset($all_images[0]) ) {?><li><a target="_blank" href="<?php echo $all_images[0]; ?>" >Photograph</a></li>		<?php } ?>			
						
<?php	if(isset($all_images[1])) {?><li><a target="_blank" href="<?php echo $all_images[1]; ?>" >Proof of ID</a></li>		<?php } ?>			
						
<?php	if(isset($all_images[2])) {?><li><a target="_blank" href="<?php echo $all_images[2]; ?>" >Proof of Address</a></li>	<?php } ?>			
						
<?php	if(isset($all_images[3])) {?><li><a target="_blank" href="<?php echo $all_images[3]; ?>" >Right to Work</a></li>	<?php } ?>			
						
                        		</ul>
							</div>
				</td>
             <td class="center">
             <?php if ($status==0) {?><span class="label bg-purple text-white">Pending</span>
			 <?php } else if ($status==1) {?><span class="label bg-seagreen text-white">Approved</span>
			 <?php } else if ($status==2) {?><span class="label bg-yellow text-white">Suspended</span>
			 <?php } else if ($status==3) {?><span class="label bg-info text-white">Important</span>
			 <?php } else if ($status==4) {?><span class="label bg-seagreen text-white">Active</span>
			 <?php } else if ($status==5) {?><span class="label bg-pink text-white">Blocked</span>
			<?php } ?>
            </td><td>				
        		<div class="btn-group">
								
<button type="button" class="btn btn-warning btn-xs btn-animate-demo">Edit Status</button>
<button type="button" class="btn btn-warning btn-xs dropdown-toggle btn-animate-demo" data-toggle="dropdown">
									<span class="caret"></span>
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								<ul class="dropdown-menu" role="menu">
					
					<li><a href="javascript:;" onclick="return status('1','<?php echo $row['app_form_code']; ?>');">Approved</a></li>
					<li><a href="javascript:;" onclick="return status('0','<?php echo $row['app_form_code']; ?>');">Pending</a></li>
					<li><a href="javascript:;" onclick="return status('2','<?php echo $row['app_form_code']; ?>');">Suspended</a></li>
					<li><a href="javascript:;" onclick="return status('3','<?php echo $row['app_form_code']; ?>');">Important</a></li>
					<li><a href="javascript:;" onclick="return status('4','<?php echo $row['app_form_code']; ?>');">Active</a></li>
					<li class="divider"></li>
					<li><a href="javascript:;" onclick="return status('5','<?php echo $row['app_form_code']; ?>');">Block</a></li>
								</ul>
							</div>

</td>
            
               <td class="center">		<a href="mail_to_print.php?show=ok&num=<?php echo $row['app_form_code']; ?>" target="_blank" >		<button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
<?php if(isset($_SESSION['id']) && (!($_SESSION['type']==1))) {  ?>			
<a href="javascript:;" onclick="return del('<?php echo $row['app_form_code']; ?>');">
<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
<a href="custom_mail.php" ><button type="button" class="btn btn-success btn-xs"><i class="fa fa-envelope"></i></button></a>
<?php } ?>


							</td>
						</td>
             </tr>
<?php
$i++;
}
}
?>

           </tbody>
           <tfoot>
            <tr>
             <th>#</th>
             <th>ID</th>
             <th>Name</th>
             <th>Email</th>
 	     <th>Attachments</th>
             <th colspan=2>Status</th>
                         <th>Options</th>
           </tr>
         </tfoot>
       </table>
		

  									</div> <!-- /panel body -->	
  								</div>	
  							</div>
  						</div>



<!-- Load JS here for Faster site load =============================-->
<?php include('partials/footer.php'); ?>
<script src="js/jquery.dataTables.min.js"></script>
  <script src="js/bootstrap-datatables.js"></script>
<script src="js/dataTables-custom.js"></script>
