<div class="header">
  <a href="#default" class="logo">LIVRE D'OR</a>
  <div class="header-right">
    <?php if (isset($_SESSION['id'])) { ?>
      <a href="livredor.php">LIVREDOR</a>
      <a href="commentaire.php">LAISSER UN COMMENTAIRE</a>
    <? } else { ?>
      <a class="active" href="inscription.php">INSCRIPTION</a>
      <a href="connexion.php">CONNEXION</a>
    <?php } ?>
    <a href="https://github.com/ridha-boughediri/livre-or/">LIEN GITHUB</a>
  </div>
</div>