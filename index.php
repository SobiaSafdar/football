<?php	
ob_start();
require_once "lib/connect.php";
require_once "lib/classes/util_objects/util.php";
require_once "lib/classes/business_objects/login.php";
$obj=new Login();

if(isset($_REQUEST['submit']))
{
    $get_user=   $obj->selectuser("admin_username='".$_REQUEST['username']."' and admin_password='".$_REQUEST['password']."'",  array("*"));
    if($get_user)
        {
            $message='Successfuly LoggedIn';	
            session_start();
            $_SESSION['session_admin_role']		=	'admin';	
            $_SESSION['session_admin_id']		=	$get_user[0]['admin_id'];	
            $_SESSION['session_admin_email']    	=	$get_user[0]['admin_email'];	
            $_SESSION['session_admin_name']		=	$get_user[0]['admin_username'];	
            header("Location: dashboard.php");	
        }
    else $message='Wrong Login Credentials for Admin';				
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">
</head>
<body >
  <div class="login-box">
    <h1><i class='fa fa-bookmark'></i>&nbsp;Welcome </h1>
    <hr>
    <?php   if(isset($message)) {  ?>
        <h5><div class="alert alert-warning">
            <?php echo $message; ?>
        </div></h5>
    <?php   } else { ?>
    <h5>LOGIN</h5>
    <?php   } ?>

    <div class="input-box">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
            <form  role="form" method="post" >
            <div class="input-group form-group">
              <span class="input-group-addon"><i class='fa fa-envelope'></i></span>
              <input type="text" required="" name="username" class="form-control" placeholder="Email" autocomplete="off">
            </div>
            <div class="input-group form-group">
              <span class="input-group-addon"><i class='fa fa-key'></i></span>
              <input type="Password" required="" name="password" class="form-control" placeholder="Password" autocomplete="off">
            </div>
            <h5><a href="registration.php">New User?</a></h5>
            <div class="form-group">
                <button type="submit" class="btn  btn-block  btn-submit pull-right" name="submit">Submit</button>
            </div>
          </form>
        </div>
        <!-- col -->
      </div>
      <!-- row -->
      <div class="row">
          <bR><br>
      </div>
          
    </div>
    <!-- input-box -->
  </div>
  <!-- lock-box -->
</body>
</html>