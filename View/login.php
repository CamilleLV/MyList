<h1>Connexion</h1>

<?php if (isset($errorMessage)): ?>
  <p style="color: red;"><?php echo $errorMessage; ?></p>
<?php endif; ?>

<form method="get" action="login">
  <label for="username">Nom d'utilisateur :</label><br>
  <input type="text" id="username" name="username"><br>
  <br>
  <label for="password">Mot de passe :</label><br>
  <input type="password" id="password" name="password"><br>
  <br>
  <input type="submit" value="se_connecter">
</form>
