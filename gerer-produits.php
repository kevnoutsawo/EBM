<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/dropzone/src/dropzone.css">
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
								<h4>Catégories</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Catalogue</a></li>
									<li class="breadcrumb-item active" aria-current="page">Produits</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									Options
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="produits.php"><i class="fa fa-reply"> Retour</i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<form method="post" action="gerer-produits.php">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue">Gerer un produit</h4>
								<p class="mb-30 font-14">.</p>
							</div>
							<div class="pull-right">
								<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Créer / Mettre à jour</button>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nom </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Nom du produit">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Image principale </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="file" placeholder="Image du produit">
							</div>
						</div>
						<div class="dropzone" action="#" id="my-awesome-dropzone">
							<div class="fallback">
								<input type="file" name="file" />
							</div>
						</div>
						<br>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Description</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="textarea_editor form-control border-radius-0" placeholder="Description ..."></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Modèle </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Fournisseur </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Quantité stock</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Prix </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Status</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="accessLevel">
									<option selected="">Choisir un status</option>
									<option value="0">Activé</option>
									<option value="1">Désactivé</option>
								</select>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/dropzone/src/dropzone.js"></script>
	<script>
		Dropzone.autoDiscover = false;
		Dropzone.prototype.defaultOptions.dictDefaultMessage = "Deposez les autres images ici";
		$(".dropzone").dropzone({
			addRemoveLinks: true,
			removedfile: function(file) {
				var name = file.name;
				var _ref;
				return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
			}
		});

	</script>
</body>
</html>