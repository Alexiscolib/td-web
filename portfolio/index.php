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
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At lectus urna duis convallis. Sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus. Habitant morbi tristique senectus et. Tortor consequat id porta nibh venenatis cras sed. Netus et malesuada fames ac turpis egestas. Dictum non consectetur a erat nam at. Rhoncus aenean vel elit scelerisque mauris pellentesque. Id venenatis a condimentum vitae sapien pellentesque habitant morbi. Varius vel pharetra vel turpis nunc eget lorem. In nibh mauris cursus mattis molestie a iaculis. Duis ut diam quam nulla porttitor massa id neque. Duis tristique sollicitudin nibh sit. Cras sed felis eget velit aliquet sagittis. Sagittis aliquam malesuada bibendum arcu.

			Arcu cursus euismod quis viverra nibh cras pulvinar. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra justo. Et pharetra pharetra massa massa. Semper auctor neque vitae tempus quam pellentesque. Congue eu consequat ac felis. Elementum tempus egestas sed sed. Erat imperdiet sed euismod nisi porta. Sed nisi lacus sed viverra. At ultrices mi tempus imperdiet nulla malesuada pellentesque. Volutpat lacus laoreet non curabitur gravida.

			Odio eu feugiat pretium nibh. Est ullamcorper eget nulla facilisi etiam dignissim. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Dictum fusce ut placerat orci nulla. Mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan tortor. Vitae tortor condimentum lacinia quis vel. Dui accumsan sit amet nulla facilisi. At tellus at urna condimentum mattis pellentesque id nibh tortor. In nulla posuere sollicitudin aliquam ultrices sagittis orci a. Laoreet non curabitur gravida arcu ac. Eget lorem dolor sed viverra ipsum nunc aliquet bibendum. Metus dictum at tempor commodo ullamcorper a lacus vestibulum sed. Egestas pretium aenean pharetra magna ac placerat vestibulum lectus mauris.

			Turpis egestas maecenas pharetra convallis. Vitae ultricies leo integer malesuada nunc. Ipsum faucibus vitae aliquet nec ullamcorper sit. Sed elementum tempus egestas sed sed. Risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus. Nibh sit amet commodo nulla facilisi nullam. Aliquet risus feugiat in ante metus dictum at. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Vel pretium lectus quam id leo in. Habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Tempor orci eu lobortis elementum nibh tellus molestie. Tempus urna et pharetra pharetra massa massa ultricies mi. Et malesuada fames ac turpis egestas integer eget aliquet nibh. Aliquam ultrices sagittis orci a scelerisque purus semper. Rhoncus mattis rhoncus urna neque viverra justo nec ultrices. Semper feugiat nibh sed pulvinar proin. Eget aliquet nibh praesent tristique. Nibh ipsum consequat nisl vel pretium lectus quam.

			Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Tristique magna sit amet purus gravida quis. Iaculis at erat pellentesque adipiscing commodo elit at imperdiet. Non tellus orci ac auctor. Gravida quis blandit turpis cursus in hac habitasse platea dictumst. At augue eget arcu dictum varius duis at. Hendrerit dolor magna eget est lorem. Tellus molestie nunc non blandit massa enim. Feugiat pretium nibh ipsum consequat nisl. Mauris sit amet massa vitae. Et tortor at risus viverra adipiscing at in tellus integer. Leo vel fringilla est ullamcorper eget nulla facilisi. At tempor commodo ullamcorper a lacus vestibulum sed. Nisl tincidunt eget nullam non nisi est. Ut diam quam nulla porttitor massa.
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

		</section>

		<section>
			<a name="formation"></a>
			<h1>Formation</h1>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At lectus urna duis convallis. Sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus. Habitant morbi tristique senectus et. Tortor consequat id porta nibh venenatis cras sed. Netus et malesuada fames ac turpis egestas. Dictum non consectetur a erat nam at. Rhoncus aenean vel elit scelerisque mauris pellentesque. Id venenatis a condimentum vitae sapien pellentesque habitant morbi. Varius vel pharetra vel turpis nunc eget lorem. In nibh mauris cursus mattis molestie a iaculis. Duis ut diam quam nulla porttitor massa id neque. Duis tristique sollicitudin nibh sit. Cras sed felis eget velit aliquet sagittis. Sagittis aliquam malesuada bibendum arcu.

			Arcu cursus euismod quis viverra nibh cras pulvinar. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra justo. Et pharetra pharetra massa massa. Semper auctor neque vitae tempus quam pellentesque. Congue eu consequat ac felis. Elementum tempus egestas sed sed. Erat imperdiet sed euismod nisi porta. Sed nisi lacus sed viverra. At ultrices mi tempus imperdiet nulla malesuada pellentesque. Volutpat lacus laoreet non curabitur gravida.

			Odio eu feugiat pretium nibh. Est ullamcorper eget nulla facilisi etiam dignissim. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Dictum fusce ut placerat orci nulla. Mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan tortor. Vitae tortor condimentum lacinia quis vel. Dui accumsan sit amet nulla facilisi. At tellus at urna condimentum mattis pellentesque id nibh tortor. In nulla posuere sollicitudin aliquam ultrices sagittis orci a. Laoreet non curabitur gravida arcu ac. Eget lorem dolor sed viverra ipsum nunc aliquet bibendum. Metus dictum at tempor commodo ullamcorper a lacus vestibulum sed. Egestas pretium aenean pharetra magna ac placerat vestibulum lectus mauris.

			Turpis egestas maecenas pharetra convallis. Vitae ultricies leo integer malesuada nunc. Ipsum faucibus vitae aliquet nec ullamcorper sit. Sed elementum tempus egestas sed sed. Risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Sit amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus. Nibh sit amet commodo nulla facilisi nullam. Aliquet risus feugiat in ante metus dictum at. Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Vel pretium lectus quam id leo in. Habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Tempor orci eu lobortis elementum nibh tellus molestie. Tempus urna et pharetra pharetra massa massa ultricies mi. Et malesuada fames ac turpis egestas integer eget aliquet nibh. Aliquam ultrices sagittis orci a scelerisque purus semper. Rhoncus mattis rhoncus urna neque viverra justo nec ultrices. Semper feugiat nibh sed pulvinar proin. Eget aliquet nibh praesent tristique. Nibh ipsum consequat nisl vel pretium lectus quam.

			Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Tristique magna sit amet purus gravida quis. Iaculis at erat pellentesque adipiscing commodo elit at imperdiet. Non tellus orci ac auctor. Gravida quis blandit turpis cursus in hac habitasse platea dictumst. At augue eget arcu dictum varius duis at. Hendrerit dolor magna eget est lorem. Tellus molestie nunc non blandit massa enim. Feugiat pretium nibh ipsum consequat nisl. Mauris sit amet massa vitae. Et tortor at risus viverra adipiscing at in tellus integer. Leo vel fringilla est ullamcorper eget nulla facilisi. At tempor commodo ullamcorper a lacus vestibulum sed. Nisl tincidunt eget nullam non nisi est. Ut diam quam nulla porttitor massa.
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