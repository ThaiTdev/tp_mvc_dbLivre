
<h1 class="titre">Ma Bibliothéque</h1>


<header>
	<div class="container-fluid">
		<ul class="nav justify-content-center nav-pills" id="menu">
			<li class="nav-item dropdown">
				<a class="nav-link" href="?controller=home&action=home">Accueil</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Livres
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="?controller=livre&action=all_showBooks">Tous les livres</a>
					<a class="dropdown-item" href="?controller=livre&action=all_selectByTitle">Par titre</a>
					<a class="dropdown-item" href="?controller=livre&action=all_selectByAuteur">Par auteur</a>
					<a class="dropdown-item" href="?controller=livre&action=all_selectByEditeur">Par éditeur</a>
					
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Fournisseurs
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="?controller=fournisseur&action=all_showFournisseur">Tous les fournisseurs</a>
					<a class="dropdown-item" href="?controller=fournisseur&action=all_selectByRaisonS">Par raison sociale</a>
					<a class="dropdown-item" href="?controller=fournisseur&action=all_selectByLocalite">Par localité</a>
					<a class="dropdown-item" href="?controller=fournisseur&action=all_selectByCountry">Par pays</a>
					
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Commandes
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="?controller=commander&action=all_showCommander">Toutes les commandes</a>
					<a class="dropdown-item" href="?controller=commander&action=all_selectCommandeByEditeur">Par éditeur</a>
					<a class="dropdown-item" href="?controller=commander&action=all_selectCommandeByFournisseur">Par fournisseur</a>
					<a class="dropdown-item" href="?controller=commander&action=all_selectCommandeByDate">Par date</a>
					
				</div>
			</li>
		</ul>
	</div>
</header>