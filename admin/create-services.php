<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />

	<title>Services - Sourcecode.lk</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>



</head>

<body class="page-body"> 

	<div class="page-container">
		<!-- navogation panel start-->
		<?php include './components/navigation.php' ?>
		<!-- navogation panel start-->

		<div class="main-content">

			<!-- Header start-->
			<?php include './components/header.php' ?>
			<!--Header panel end -->

			<div class="page-title">

				<div class="title-env">
					<h1 class="title">Manage Services</h1>
					<p class="description">You can manage all services in this panel</p>
				</div>

				<div class="breadcrumb-env">

					<ol class="breadcrumb bc-1">
						<li>
							<a href="dashboard-1.html"><i class="fa-home"></i>Home</a>
						</li>
						<li>

							<a href="forms-native.html">Home</a>
						</li>
						<li class="active">

							<strong>Services</strong>
						</li>
					</ol>

				</div>

			</div>

			<div class="row">
				<div class="col-sm-12">

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Create Services</h3>

						</div>
						<div class="panel-body">

							<form role="form" class="form-horizontal" role="form">

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Title</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-1" placeholder="Enter the title">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Icion Code</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-2" placeholder="Enter the icion code">
									</div>
								</div>



								<div class="form-group">
									<label class="col-sm-2 control-label">Short Description</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" placeholder="Enter the Short Description">
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-10"></div>
										<div class="col-sm-2">
											<button type="submit" id="create" name="create" class="btn btn-secondary btn-single">Create</button>
										</div>
									</div>
								</div>
						</div>
					</div>
					</form>

				</div>


			</div>
			<!-- Basic Setup -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Manage Services</h3>

					<div class="panel-options">
						<a href="#" data-toggle="panel">
							<span class="collapse-icon">&ndash;</span>
							<span class="expand-icon">+</span>
						</a>
						<a href="#" data-toggle="remove">
							&times;
						</a>
					</div>
				</div>
				<div class="panel-body">

					<script type="text/javascript">
						jQuery(document).ready(function($) {
							$("#example-1").dataTable({
								aLengthMenu: [
									[10, 25, 50, 100, -1],
									[10, 25, 50, 100, "All"]
								]
							});
						});
					</script>

					<table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</thead>

						<tfoot>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</tfoot>

						<tbody>
							<tr>
								<td>Tiger Nixon</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
								<td>61</td>
								<td>2011/04/25</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>

									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>

									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>

						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>


	<?php include './components/footer.php' ?>

	</div>
	</div>

	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/datatables/dataTables.bootstrap.css">

	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>
	<script src="assets/js/datatables/js/jquery.dataTables.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/datatables/dataTables.bootstrap.js"></script>
	<script src="assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
	<script src="assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>

	<script type="text/javascript" src="./ajax/js/services.js"></script>
</body>

</html>