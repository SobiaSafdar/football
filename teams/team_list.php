<?php 
include (dirname(__FILE__).'/../lib/includes.php');
$obj    =   new team();
$teams  =   $obj->select("1 order by team_name",array("*"));
?>
<div class="row">
    <div class="col-mod-12">
        <ul class="breadcrumb">
            <li><a class="active">Dashboard</a></li>
        </ul>
    </div>
</div>
<div class="row">
           <div class="col-md-12">
            <div class="panel">
             <div class="panel-heading text-primary">
              <h3 class="panel-title">
               <i class="fa fa-pencil-square"></i>
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
            <div class="panel-body panel-border">
            <table  class="table table-bordered table-hover table-striped display" id="example" >
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Options</th>
                    </tr>
                </thead>
            <tbody>
            <?php 
            if(isset($teams) && $teams!='')
            {    
                foreach($teams as $team) {  ?>
                <tr class="gradeC">
                    <td><?php echo $team['team_name']; ?></td>
                    <td><img src="<?php echo $team['team_image']; ?>" ></td>
                    <td class="center">		
                        <a href="javascript:;" onclick="return del('<?php echo $row['app_form_code']; ?>');">
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning btn-xs btn-animate-demo">Edit Status</button>
			</div>
                    </td>
                </tr>
            <?php }
            }  ?>

            </tbody>
        </table>
            </div>
        </div>
    </div>		
</div> <!-- /panel body -->	
 <?php  include (dirname(__FILE__).'/../lib/footer.php');?>
<script src="<?php echo SITE_ADDRESS ?>js/jquery.dataTables.min.js"></script>
  <script src="<?php echo SITE_ADDRESS ?>js/bootstrap-datatables.js"></script>
<script src="<?php echo SITE_ADDRESS ?>js/dataTables-custom.js"></script>