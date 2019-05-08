<?php 
include "koneksi.php";
$id_admin=$_GET['id_admin'];
$query=mysql_query("select * from admin where id_admin='$id_admin'");
?>

<?php 
include "dashboard.php";
?>

	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit admin</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default articles">

					<div class="panel-body">
						<form class="form-horizontal" action="update.php" method="POST" name="update">
							<?php
								while($row=mysql_fetch_array($query)){
								?>
								<input type="Hidden" name="id_admin" value="<?php echo $id_admin;?>" />
							<fieldset>

								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Username</label>
									<div class="col-md-9">
										<input id="username" name="username" type="text" value="<?php echo $row['username'] ?>" class="form-control">
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Password</label>
									<div class="col-md-9">
						
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<input type="submit" class="btn btn-default btn-md pull-right" value="update" name="Update">
									</div>
								</div>
								<?php } ?>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!--/.col-->
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	  

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
