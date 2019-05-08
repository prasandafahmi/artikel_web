<?php 
include "koneksi.php";
$id_admin=$_GET['id_admin'];
$query=mysql_query("select * from admin where id_admin='$id_admin'");
?>

<?php include 'dashboard.php'; ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Admin</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Admin</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-default">
					<div class="panel-heading">Forms</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="POST" action="update_admin.php" name="update_admin">
								<?php
								while($row=mysql_fetch_array($query)){
								?>
								<input type="hidden" name="id_admin" value="<?php echo $id_admin ?>">
								<div class="form-group">
									<label>Username</label>
									<input class="form-control" placeholder="Masukkan Username" name="username" value="<?php echo $row['username']; ?>">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="Placeholder" name="password" value="<?php echo $row['password']; ?>">
								</div>
									<input type="submit" name="update_admin" class="btn btn-primary">
									<button type="reset" class="btn btn-default">Reset Button</button>
								</div>
							<?php } ?>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->		
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
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>