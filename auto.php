<?php session_start(); ?>
<?php
$connexion = mysqli_connect("localhost", "root","", "moduleconnexion"); 
$requete = query('SELECT name as label, id FROM partners WHERE name LIKE "%'.$secure.'%" ORDER BY name LIMIT 25');;








?>

<form>
      <input type = "text" id="recherche"/>
  </form>

  <script>
      $('#recherche').autocomplete({
          source: 'auto.php',
          autoFocus : true,
          minLength: 1,
      )};
</script>

<?php 


if (isset($_GET['term']))
{
    $connexion = mysqli_connect("localhost", "root","", "moduleconnexion"); 
    $requete = query('SELECT noms, pays  FROM football WHERE noms, pays LIKE "%'.$secure.'%" ORDER BY name LIMIT 25');
    $secure = htmlspecialchars($_GET['term']);
    $result = $bdd->query('SELECT noms, pays  FROM football WHERE noms, pays LIKE "%'.$secure.'%" ORDER BY name LIMIT 25');
    
}
?>