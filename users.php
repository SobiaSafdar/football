<?php 
ob_start();
session_start();
include('partials/header.php'); ?>

<script src="js/jquery.min.js" type="text/javascript"></script><link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="css/ion.calendar.css" rel="stylesheet" type="text/css">
<script>
$(function(){
       $("#mydate").ionDatePicker();
});
</script>
			<div class="row">
  							<div class="col-mod-6">
									<ul class="breadcrumb">
  									 <li><a href="dashboard.php">Dashboard</a></li>
                                     <li><a class="active">Register</a></li>
  								</ul>
							</div>
  						</div>

  						<!-- Demo Panel -->
  						<div class="row" align="center">
	<div class="col-md-6">
		<div class="panel panel-cascade">
			<div class="panel-heading">
				<h3 class="panel-title">
					User Registration
					<span class="pull-right">
						<a  href="#" class="panel-minimize"><i class="fa fa-chevron-up"></i></a>
						<a  href="#"  class="panel-close"><i class="fa fa-times"></i></a>
					</span>
				</h3>
			</div>
			<div class="panel-body" >
	<div class="row">
					<div class="col-mol-md-offset-4" >
                      <?php
if(isset($_POST['ok']))	
{	
include "connection.php";

		
		$email = $_REQUEST['email'];
		$username  = $_REQUEST['username'];
		$pass  = md5($_REQUEST['password']);
 		$type  = $_REQUEST['type'];
		$dob  = $_REQUEST['dob'];
 
		$sql1= "SELECT * FROM app_admin where admin_email='$email' AND admin_password='$pass' ";
		$rs1 = mysql_query($sql1) or die(mysql_error());

			if(mysql_num_rows($rs1)>0)
			{
?>					 <div class="alert alert-info alert-dismissable">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          Already exist , please Try another one..
         </div>
         <?php
			}
		
else	{
		
$sql= "Insert into app_admin set admin_email ='$email' ,admin_password='$pass' ,admin_username='$username'  , admin_type='$type' ,admin_dob	='$dob' ";
				$rs = mysql_query($sql) or die(mysql_error());
					if($rs>0)
					{
				
				if(isset($_SESSION['id']))
										{
				?>					 <div class="alert alert-info alert-dismissable">
				   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				  User Submitted.
				 </div>
				 <?php
					header('refresh:2, url=users.php');
					}
					
			else
										{
													$sql= "SELECT * FROM app_admin where admin_email='$email' AND admin_password='$pass' ";
													$rs = mysql_query($sql) or die(mysql_error());
											
														if(mysql_num_rows($rs)>0)
														{
																				while($rows=mysql_fetch_array($rs))
																			{
																					$_SESSION['id']		= $rows['admin_id'];
																					$_SESSION['type']		= $rows['admin_type'];
																			?>					 <div class="alert alert-info alert-dismissable">
				   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				  User Submitted. Now you can submit your application . wait for a second...
				 </div>
				 <?php
																					header("refresh:2, url=dashboard.php");
											
																			}
														
														}

										}
					
					
					}
			
		}


mysql_close($con);
}
?>
		<form class="form-horizontal cascade-forms"  method="post" action="#" name="signup_form" id="signup_form" novalidate role="form">

 							<div class="form-group">
								<label class="col-lg-2 col-md-3 control-label">Email</label>
								<div class="col-lg-10 col-md-9">
									<input type="email" class="form-control form-cascade-control input-small" name="email" id="email">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 col-md-3 control-label">Username</label>
								<div class="col-lg-10 col-md-9">
									<input type="text" class="form-control form-cascade-control input-small" name="username" id="username">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 col-md-3 control-label">Password</label>
								<div class="col-lg-10 col-md-9">
									<input type="text" class="form-control form-cascade-control input-small" name="password" id="password">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 col-sm-3 control-label">Confirm Password</label>
								<div class="col-lg-10 col-md-9">
									<input type="text" class="form-control form-cascade-control input-small" name="confirmPassword" id="confirmPassword">
								</div>
							</div>
                            
					        <div class="form-group">
								<label class="col-lg-2 col-md-3 control-label">DOB</label>
								<div class="col-lg-10 col-md-9">
							<input type="text" name="dob" placeholder="dd-mm-yy" id="mydate" data-lang="en" data-years="1990-2035" data-format="DD-MM-YYYY" class="form-control form-cascade-control input-small"  required="required" /> 
               
               </div> </div>
                                <div class="form-group">
						<label for="inputEmail1" class="col-lg-2 col-md-3 control-label">Type</label>
						<div class="col-lg-10 col-md-9">
							<select class="form-control" name="type">
					<?php if(!(isset($_SESSION['id']))) { ?>
								<option value="0" selected>Applicant</option>
									<?php } else { ?>
								<option value="0">Applicant</option>
								<option value="1">Manager</option>
								<option value="2">Super Admin</option>
					<?php } ?>
							</select>
				
		</div>
					</div>
		
                    		
               
               
                			<div class="form-actions">
							      <input type="submit" class="btn bg-primary text-white btn-lg"  value="submit" name="ok"></div>
						</form>
                        
                        
   
					</div>
				</div>

			</div>
		</div>
	</div>
</div>


</div> 

<script src="js/jquery-1.10.2.min.js"></script>
<?php include('partials/footer.php'); ?>

<!-- Page Script File  =============================-->
<script src="js/validate.js"></script>
<script type="text/javascript">
$(document).ready(function(){
		// SignUp Form Validation
	$("#signup_form").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			password:{
				required: true,
				minlength:6
			},
			confirmPassword:{
				required:true,
				minlength:6,
				equalTo:"#password"
			},
			date:{
				required:true,
				date: true
			},
			username: {
				required: true,
				minlength: 5,
				maxlength: 16
			}
		},
		errorClass: "help-inline text-danger",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.form-group').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.form-group').removeClass('has-error');
			$(element).parents('.form-group').addClass('has-success');
		}
	});
});
</script>

<script src="js/ion.calendar.js"></script>
</body>
</html>