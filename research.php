<?php
if (isset($_GET['recherche'])) {
    $research = $_GET['recherche'];
}

$bdd = new PDO('mysql:host=localhost;dbname=autocompletion;charset=UTF8', "root", "");

$sql="SELECT id, noms  FROM football WHERE noms LIKE '%$research%'";
$result = $bdd->query($sql)->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);
?>

<table>
    <!-- td de fermeture -->
    <td class="on"></td>
    <?php
    foreach ($result as $data) {
        echo "</br><a href='search.php?q=".$data['noms']."'>".$data['noms']."</a>";
    }
    ?>
</table>