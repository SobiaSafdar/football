<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet" type="text/css"> 
  <link href="less/style.less" rel="stylesheet"  title="lessCss" id="lessCss">
  <link href="css/custom.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
    <div class="site-holder top-navbar">
      <nav class="navbar" role="navigation">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle  bg-white" data-toggle="collapse" data-target="#top-navbar-menu">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button> 
          <a class="navbar-brand" href="#">Logo
            <!-- <img src="images/logo.jpg" style="height:50; width:50">-->
          </a>
        </div>
        <div class="collapse navbar-collapse" id="top-navbar-menu">
        <ul class="nav navbar-nav top-navbar ">
            <li class="dropdown ">
            <a href="dashboard.php">Dashboard</a>
        </li>
        <?php  
        if(isset($_SESSION['id'])) 
        {
            if( $_SESSION['type']==1 )
            {	
            ?>
            <li class="dropdown ">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee<i class="fa fa-chevron-circle-down"></i></a>
                 <ul class="dropdown-menu">
                    <li><a href="employee_list.php"><i class="fa fa-text-width"></i>View Employee</a></li>
                 </ul>
            </li>
            <li class="dropdown ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users<i class="fa fa-chevron-circle-down"></i></a>
                    <ul class="dropdown-menu">
                       <li><a href="user_view.php"><i class="fa fa-text-width"></i>View User</a></li>
                    </ul>
            </li>
            <?php	
            }
        }
        ?>
        </ul>
        <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav user-menu navbar-right " id="user-menu">
        <li><a href="#" class="user dropdown-toggle" data-toggle="dropdown"><span class="username"><img src="images/profiles/eleven.png" class="user-avatar" alt="">  <?php echo $_SESSION['session_admin_name']; ?> </span></a>
            <ul class="dropdown-menu">
                <li><a href=""><i class="fa fa-user"></i> My Profile</a></li>
                <li class="divider"></li>
                <li><a href="lib/logout.php" class="text-danger"><i class="fa fa-lock"></i> Logout</a></li>
            </ul>
          </ul>
       </div>
</nav> <!-- /.navbar -->

<div class="content">
