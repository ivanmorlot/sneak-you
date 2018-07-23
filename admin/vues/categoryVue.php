<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bootstrap Material Admin by Bootstrapious.com</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="all,follow">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<!--<link rel="shortcut icon" href="img/favicon.ico">-->
	<link rel="stylesheet" href="../../css/admin.css">
</head>

<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					sne*k you
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<form class="navbar-form navbar-left" method="GET" role="search">
					<div class="form-group">
						<input type="text" name="q" class="form-control" placeholder="Rechercher">
					</div>
					<button type="submit" class="btn btn-default">
						<i class="glyphicon glyphicon-search"></i>
					</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="http://localhost/sneak-you/index.html" target="_blank">Site public</a>
					</li>
					<li class="dropdown ">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							Profil
						<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">MON COMPTE</li>
							<li>
								<a href="#">Paramètres</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="../../utils/logout.php">Se déconnecter</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
				<li class="active">
					<a href="#">Gérer les catégories</a>
				</li>
				<li>
					<a href="#">Gérer les marques</a>
				</li>
				<li>
					<a href="#">Gérer les produits</a>
				</li>
				<li>
					<a href="#">Gérer les stocks</a>
				</li>
				<li>
					<a href="#">Gérer les utilisateurs</a>
				</li>
			</ul>
		</div>
		<div class="col-md-10 content">
			<div class="panel panel-default">
				<div class="panel-heading">
					Editer une catégorie
				</div>
				<div class="panel-body">
					<a href="category.php">Tout afficher</a>
					<form action="category.php" method="post">
        				<label for="research">Recherche par nom :</label>
        				<input type="text" name="research">
						<button type="submit">Rechercher</button>
    				</form>
    				<table class="display-table">
						<tr>
							<td>ID</td>
							<td>Nom</td>
							<td>Description</td>
							<td></td>
							<td></td>
						</tr>
						<?=$result?>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-10 content">
			<div class="panel panel-default">
				<div class="panel-heading">
					Ajouter une catégorie
				</div>
				<div class="panel-body">
				<form enctype="multipart/form-data" action="add-category.php" method="post">
					<table class="post-table">
						<tr>
							<td>Nom</td>
							<td><input type="text" name="name" maxlength="30" required></td>
						</tr>
						<tr>
							<td>Description</td>
							<td><textarea name="description" maxlength="1000" cols="30" rows="5" style="resize:none"></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Enregistrer"></td>
						</tr>
					</table>
				</form>
				</div>
			</div>
		</div>
	</div>

	<!-- JavaScript files-->
	<script src="../../js/jquery.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/jquery.cookie.js"> </script>

	<!-- Main File-->
	<script src="../../js/front.js"></script>
	<script src="../../js/tools.js"></script>

</body>

</html>