<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <title>Document</title>
</head>
<body>
<form action="traitement.php" method="POST">
  <label for="nom">Votre nom*</label>
  <input type="text" id="nom" name="nom" placeholder="Entrez votre nom"  required/>
  <br/> <br/>
  <label for="prenom">Votre prenom*</label>
  <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom" required />
  <br/> <br/>
  <label for="email">Votre mail*</label>
  <input type="text" id="email" name="email" placeholder="Entrez votre email" required />
  <br/> <br/>
  <label for="pass">Votre mot de pass*</label>
  <input type="text" id="pass" name="pass" placeholder="Entrez votre pass" required />
  <br/><br/>
  <button type="submit" value="M'inscrire" name="ok">Se connecter</button>
</form>-
    
