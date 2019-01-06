<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/media/css/responsive.dataTables.css">
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Produits</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Catalogue</a></li>
									<li class="breadcrumb-item active" aria-current="page">Options</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									Options
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="gerer-produits.php"><i class="fa fa-plus"> Ajouter</i></a>
									<a class="dropdown-item" href="#"><i class="fa fa-refresh"></i> Rafraichir</a>
									<a class="dropdown-item btn-danger" href="#"><i class="fa fa-trash"></i> Supprimer</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<form method="post" action="create-user.php">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue">Gerer une option</h4>
								<p class="mb-30 font-14">.</p>
							</div>
							<div class="pull-right">
								<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Créer / Mettre à jour</button>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nom </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Nom de l'option">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Type </label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="accessLevel">
									<option selected="">Choisir un type</option>
									<option value="checkbox">Checkbox</option>
									<option value="number">Number</option>
									<option value="date">Date</option>
								</select>
							</div>
						</div>
					</form>

					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Liste des valeurs</h5>
						</div>
					</div>
					<div class="row">
						<table class="stripe hover multiple-select-row produits nowrap">
							<thead>
								<tr>
									<th>Valeur</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Checkbox 1</td>
									<td>
										<a class="dropdown-item btn-danger" href="#"><i class="fa fa-trash"></i> Supprimer</a>
									</td>
								</tr>
								<tr>
									<td>Checkbox 2</td>
									<td>
										<a class="dropdown-item btn-danger" href="#"><i class="fa fa-trash"></i> Supprimer</a>
									</td>
								</tr>
								<tr>
									<td colspan="2"><button class="dropdown-item btn-success text-success"><i class="fa fa-plus"></i> Ajouter</button></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
	<script src="src/plugins/datatables/media/js/dataTables.responsive.js"></script>
	<script src="src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.print.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.html5.js"></script>
	<script src="src/plugins/datatables/media/js/button/buttons.flash.js"></script>
	<script src="src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
	<script>

		$('document').ready(function(){
			

			$('.produits').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tout"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ Categories",
					searchPlaceholder: "Recherche"
				},
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'pdf', 'print'
				]
			});
		});
	</script>
</body>
</html>