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
								<h4>Commandes</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Ventes</a></li>
									<li class="breadcrumb-item active" aria-current="page">Commandes</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									Options
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#"><i class="fa fa-plus"> Ajouter</i></a>
									<a class="dropdown-item" href="#"><i class="fa fa-refresh"></i> Rafraichir</a>
									<a class="dropdown-item btn-danger" href="#"><i class="fa fa-trash"></i> Supprimer</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Liste des commandes</h5>
						</div>
					</div>
					<div class="row">
						<table class="stripe hover multiple-select-row produits nowrap">
							<thead>
								<tr>
									<th class="datatable-nosort"><input type="checkbox" id="customCheck1" class="selectall">
										<label for="customCheck1"></label>
										</th>
									<th>N° Commande</th>
									<th>Client</th>
									<th>Status</th>
									<th>Total</th>
									<th>Date ajout</th>
									<th class="datatable-nosort">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="checkbox"></td>
									<td>2924</td>
									<td>Kala Desiré</td>
									<td><span class="badge badge-primary">En cours</span></td>
									<td class="text-success">45 000FCFA</td>
									<td>08/01/2019</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="details-commande.php"><i class="fa fa-eye"></i> Details</a>
												<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Modifier</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Supprimer</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>2925</td>
									<td>Batoula Honoré</td>
									<td><span class="badge badge-success">Validé</span></td>
									<td class="text-success">85 000FCFA</td>
									<td>05/01/2019</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="details-commande.php"><i class="fa fa-eye"></i> Details</a>
												<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Modifier</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Supprimer</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>2926</td>
									<td>Kamga Sylvie</td>
									<td><span class="badge badge-danger">Remboursé</span></td>
									<td class="text-danger">60 000FCFA</td>
									<td>12/01/2019</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="details-commande.php"><i class="fa fa-eye"></i> Details</a>
												<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Modifier</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Supprimer</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td>2927</td>
									<td>Atangana Charles</td>
									<td><span class="badge badge-warning">Non récupéré</span></td>
									<td class="text-danger">120 000 FCFA</s></td>
									<td>06/01/2019</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="details-commande.php"><i class="fa fa-eye"></i> Details</a>
												<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Modifier</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Supprimer</a>
											</div>
										</div>
									</td>
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
			
			$('.selectall').click(function() {
			    if ($(this).is(':checked')) {
			        $('div input').attr('checked', true);
			    } else {
			        $('div input').attr('checked', false);
			    }
			});

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