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
									<li class="breadcrumb-item"><a href="commandes.php">Commandes</a></li>
									<li class="breadcrumb-item active" aria-current="page">Details commande</li>
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
				
				<div class="row clearfix">
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card box-shadow">
							<div class="card-header">Details commande</div>
							<div class="card-body">
								<table style="td { padding: 5px;}">
									<tbody>
										<tr>
											<td style="padding: 5px;"><span class="badge badge-primary"><i class="fa fa-2x fa-shopping-cart"></i></span> Nom Boutique</td>
										</tr>
										<tr>
											<td style="padding: 5px;"><span class="badge badge-primary"><i class="fa fa-2x fa-calendar"></i></span> 08/01/2019</td>
										</tr>
										<tr>
											<td style="padding: 5px;"><span class="badge badge-primary"><i class="fa fa-2x fa-credit-card"></i></span> Cash à la livraison</td>
										</tr>
										<tr>
											<td style="padding: 5px;"><span class="badge badge-primary"><i class="fa fa-2x fa-truck"></i></span> Frais de livraison standard</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card box-shadow">
							<div class="card-header">Details Client</div>
							<div class="card-body">
								<table style="td { padding: 5px;}">
									<tbody>
										<tr>
											<td style="padding: 5px;"><span class="badge badge-primary"><i class="fa fa-2x fa-user"></i></span> Nom Client</td>
										</tr>
										<tr>
											<td style="padding: 5px;"><span class="badge badge-primary"><i class="fa fa-2x fa-users"></i></span> Groupe client</td>
										</tr>
										<tr>
											<td style="padding: 5px;"><span class="badge badge-primary"><i class="fa fa-2x fa-envelope"></i></span>    Mail client</td>
										</tr>
										<tr>
											<td style="padding: 5px;"><span class="badge badge-primary"><i class="fa fa-2x fa-mobile"></i></span> 6 99 99 99 99</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-success box-shadow">
							<div class="card-header">Adresse de livraison</div>
							<div class="card-body">
								<h5 class="card-title text-white">Akwa</h5>
								<p class="card-text">Douala, Cameroun</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Liste des produits</h5>
						</div>
					</div>
					<div class="row">
						<table class="stripe hover multiple-select-row produits nowrap">
							<thead>
								<tr>
									<th class="datatable-nosort"><input type="checkbox" id="customCheck1" class="selectall">
										<label for="customCheck1"></label>
										</th>
									<th>Image</th>
									<th>Nom</th>
									<th>Modèle</th>
									<th>Prix</th>
									<th>Quantité</th>
									<th>Status</th>
									<th class="datatable-nosort">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="checkbox"></td>
									<td><img src="vendors/images/product-img1.jpg"></td>
									<td>Fauteuil</td>
									<td>Plastique</td>
									<td class="text-success">45 000FCFA<br><s class="text-danger">70 000FCFA</s></td>
									<td>42</td>
									<td>Actif</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="gerer-produits.php"><i class="fa fa-pencil"></i> Modifier</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Supprimer</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td><img src="vendors/images/product-img2.jpg"></td>
									<td>Bureau</td>
									<td>Hybride</td>
									<td class="text-success">85 000FCFA</td>
									<td class="text-danger">15</td>
									<td>Actif</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="gerer-produits.php"><i class="fa fa-pencil"></i> Modifier</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Supprimer</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td><img src="vendors/images/product-img3.jpg"></td>
									<td>Sneakers</td>
									<td>Nike</td>
									<td class="text-success">45 000FCFA<br><s class="text-danger">60 000FCFA</s></td>
									<td>64</td>
									<td>Actif</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="gerer-produits.php"><i class="fa fa-pencil"></i> Modifier</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Supprimer</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox"></td>
									<td><img src="vendors/images/product-img4.jpg"></td>
									<td>SmartWatch</td>
									<td>Apple</td>
									<td class="text-success">250 000 FCFA<br><s class="text-danger">320 000 FCFA</s></td>
									<td class="text-danger">9</td>
									<td>Actif</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="gerer-produits.php"><i class="fa fa-pencil"></i> Modifier</a>
												<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Supprimer</a>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
							<tfoot>
					            <tr>
					                <th colspan="7" style="text-align:right">
					                Sous-total : 425 000 FCFA <br>
					                Frais de livraison : 15 000 FCFA <br>
					                Total : 440 000 FCFA</th>
					                <th>425 000 FCFA</th>
					            </tr>
					        </tfoot>
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