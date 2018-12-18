<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
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
									<li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
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
									<a class="dropdown-item" href="categories.php"><i class="fa fa-reply"> Retour</i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<form method="post" action="create-user.php">
						<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Créer une catégorie</h4>
							<p class="mb-30 font-14">.</p>
						</div>
						<div class="pull-right">
							<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Créer</button>
						</div>
						<br>
						<br>
						<div class="form-group row">
							<div class="tab">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab" aria-selected="true">Home</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-blue" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Profile</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-blue" data-toggle="tab" href="#contact" role="tab" aria-selected="false">Contact</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane fade show active" id="home" role="tabpanel">
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</div>
										</div>
										<div class="tab-pane fade" id="profile" role="tabpanel">
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</div>
										</div>
										<div class="tab-pane fade" id="contact" role="tabpanel">
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
					<!--
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nom </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Nom de la catégorie">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Description</label>
							<div class="col-sm-12 col-md-10">
								<textarea class="textarea_editor form-control border-radius-0" placeholder="Enter text ..."></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Parent </label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Boutique</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="checkbox">
								<label>EasyBuy</label>
								<input class="form-control" type="checkbox">
								<label>Autre</label>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Priorité</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text">
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
					-->
					</div>
				</div>
				<?php include('include/footer.php'); ?>
			</div>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>