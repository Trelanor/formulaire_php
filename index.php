<?php
	
	if(!empty($_POST)) {
		
		$errors = [];
		
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$sujet = $_POST['sujet'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		if(empty($nom)) {
			$errors['nom'] = 'Insérer votre nom';
		}
		
		if(empty($prenom)) {
			$errors['prenom'] = 'Insérer votre prénom';
		}
		
		if(empty($sujet)) {
			$errors['sujet'] = 'Veulliez préciser le sujet';
		}
		
		if(empty($email)) {
			$errors['email'] = 'Insérer votre adresse e-mail';
		}
		
		if(empty($message)) {
			$errors['message'] = 'Insérer votre message';
		}
		
		if(empty($errors)) {
			//si le formulaire est validé
			$to = 'jonathan.n@codeur.online';
			$headers ='From: "Nom_du_destinataire"<jonathan.n@codeur.online>'."\n";
			$headers .='Content-Type: text/html; charset="utf-8"'."\n";
			
			$msg = 'nom: '.$nom;
			$msg .= 'prenom: '.$prenom;
			$msg .= 'sujet: '.$sujet;
			$msg .= 'email: '.$email;
			$msg .= 'message: '.$message;
			
		
			if(mail('jonathan.n@codeur.online',$sujet, $msg, $headers))
			{
				echo '<script languag="javascript">alert("Le message a été envoyé");</script>';
			}
			else
			{
				echo '<script languag="javascript">alert("Le message n\'a pas pu être envoyé");</script>';
			}			
		}
	}
?>
<!DOCTYPE html>
	<html lang="fr">
		<head>
			<meta charset="utf-8">
			<title>formulaire php</title>
			<link rel="stylesheet" href="style.css">
			<link rel="stylesheet" href="bootstrap.css">
			<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
		</head>
		
		<body>
			
			<h1>Formulaire d'inscription</h1>
			
			<form method="POST" action="index.php">
				
				<div>
					<label>Nom:</label>
					<input type="text" name="nom" id="nom" placeholder="Votre nom">
				</div>
				<p><?php if(isset($errors['nom'])) echo $errors['nom']; ?></p>
				<div>
					<label>Prénom:</label>
					<input type="text" name="prenom" id="prenom" placeholder="Votre prénom">
				</div>
				<p><?php if(isset($errors['prenom'])) echo $errors['prenom']; ?></p>
				<div>
					<label>Sujet:</label>
					<input type="text" name="sujet" placeholder="Sujet">
				</div>
				<p><?php if(isset($errors['sujet'])) echo $errors['sujet']; ?></p>
				<div>
					<label>Email:</label>
					<input type="email" name="email" placeholder="Votre adresse mail">
				</div>
				<p><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
				<div>
					<label>Message</label><br>
					<textarea name="message" id="message" placeholder="votre message" rows="10" cols="60"></textarea>
				</div>
				<p><?php if(isset($errors['message'])) echo $errors['message']; ?></p>
				<div class="button">
					<button type="submit">Envoyer</button>
				</div>				
				
			</form>
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script type="text/javascript" src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
			<script>
			  particlesJS.load('particles-js', 'particles.json');
			</script>
			
			<div class="panel-cover--overlay">
				<div id="particles-js"></div>
			</div>
			
		</body>
	</html>					