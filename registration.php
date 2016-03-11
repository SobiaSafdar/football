<?php	
ob_start();
require_once "lib/connect.php";
require_once "lib/classes/util_objects/util.php";
require_once "lib/classes/business_objects/login.php";
$obj=new Login();

if(isset($_REQUEST['submit']))
{
    $get_user=   $obj->insertuser(
        array(
            'admin_username'=>$_REQUEST['username'],
            'admin_password'=>$_REQUEST['password'],
            'admin_email'   =>$_REQUEST['email'],
        ));
    if($get_user)
        {
            $message='User Created Successfuly';
            header("Refresh:2; url=index.php");	
        }
    else $message='Wrong Login Credentials for Admin';				
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Loading Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Loading Stylesheets -->    
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/reg.css" rel="stylesheet">
</head>
<body >
 <div class="reg-box">
    <h1><i class='fa fa-bookmark'></i>&nbsp;Welcome</h1>
    <hr>
    <?php   if(isset($message)) {  ?>
        <h5><div class="alert alert-warning">
            <?php echo $message; ?>
        </div></h5>
    <?php   } else { ?>
        <h5>REGISTER PANEL</h5>
    <?php   } ?>

    <div class="reg-submit-box">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
            <form  role="form" method="post" >
             <div class="input-group form-group">
              <span class="input-group-addon"><i class='fa fa-user'></i></span>
              <input type="text" required="" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="input-group form-group">
              <span class="input-group-addon"><i class='fa fa-key'></i></span>
              <input type="Password" required="" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="input-group form-group">
              <span class="input-group-addon"><i class='fa fa-envelope'></i></span>
              <input type="text" class="form-control" name="email" placeholder="E-mail">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" value="submit" class="btn  btn-block  btn-submit pull-right">Register</button>
            </div>
          </form>
        </div>
      </div>
      </div>
  </div>
  </body>
</html>