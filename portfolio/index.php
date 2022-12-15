<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Portfolio</title>
		<link rel="stylesheet" href="styles.css">

	</head>
	<body>
		<nav>
			<p><strong><font size="5">Portfolio</font><strong/></p>
			<?php
				$data=yaml_parse_file("yaml/menu.yaml");
				foreach($data AS $label => $onglet){
					echo '<a href="#'.$label.'">'.$onglet.'</a>';
				}
			?>
		
		</nav>

		<a name="accueil"></a>
		<section>
			
			<h1>Accueil</h1>
			<p>Alexis Colibert </p>
			<p>Je suis actuellement étudiant en premier année de BTS SIO </p>
		</section>

		<a name="apropos"></a>
		<section>
			<h1>A propos</h1>
			phrase d'accroche
			<p>Bnojour je m'appel Alexis Colibert, je suis né le 28/06/2004 à Saint lô</p>
			 <p>Je suis actuellement en première année de BTS SIO en spécialité réseaux.</p>
		</section>

		<a name="competences"></a>
		<section>
			
			<h1>Compétences</h1>
			<?php
				$data=yaml_parse_file("yaml/competence.yaml");
				foreach($data as $domaine => $tab){
					echo '<h2>'.$domaine.'</h2>';
					foreach($tab as $nom => $niveau){
						echo '<div class="container"><div style="width:'.$niveau.'%;" class="skill">'.$nom.' '.$niveau.' %</div></div>';
					}
				}


			?>
		</section>

		<a name="experience"></a>
		<section>
			
			<h1>Experience</h1>
			<p>poste: stage de 3ème</p>
			<p>entreprise: HagTech</p>
			<p>Date de début: 2018</p>
			<p>Date de fin: 2018</p>
			<p>Lieu: Beaumont-Hague</p>
			<p>Tache Réaliser:Pendant deux jours j'ai observé le travail de mon maitre de stage puis j'ai travailler pendant trois jours; j'ai participé à la fabrication de pièces métallique notamment grâce à des machines de mécanique de précision</p>
			<a href='data/CV.pdf'>	CV </a>
		</section>

		<section>
			<a name="formation"></a>
			<h1>Formation</h1>
			<p>Formation actuel: BTS SIO à CaenSup Sainte-Ursule spécialité réseaux informatique</p>
			<p>Formation:Bac STI2D spécialité Energie Environnement<p>
			<p>Etablissement:Lycée Polyvalent Curie Corot </p>
			<p>Date de début:2021</p>
			<p>Date de fin: 2022</p>
			<p>Lieu: Saint lô</p>
			<p>Contenu de la formation: Spécialité Energie Environnement et math </p>
			<a href='data/CV.pdf'>	CV </a>	
		</section>

		<section>
			<a name="contact"></a>
			<h1>Contact</h1>
			<form name="mon-formulaire1" action="page-envoi.html" method="get">
<p>
   <input type="radio" name="civi" value="Mme" /> Madame
   <input type="radio" name="civi" value="Mlle" /> Mademoiselle
   <input type="radio" name="civi" value="Mr" /> Monsieur
</p>
<p>
   Votre prénom :<br />
   <input type="text" name="prenom" value="" />
</p>
<p>
   Votre nom :<br />
   <input type="text" name="nom" value="" />
</p>
<p>
   Votre addresse e-mail :<br />
   <input type="password" name="addresse e-mail" value="" />
</p>
   
<p>
   Objet du message :<br />
   <textarea name="le-message" rows="6" cols="40">Vous pouvez saisir ici l'objet du message.</textarea>
</p>
<p>
	Votre message :<br />
   <textarea name="le-message" rows="6" cols="40">Vous pouvez saisir ici un message.</textarea>
</p>
<p>
   <input type="submit" value="Envoyer" />
   <input type="reset" value="Annuler" />
</p>
</form>
		</section>
		

	</body>
</html>