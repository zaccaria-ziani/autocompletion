<?php



    $q = $_GET['q'];

    $q = trim(htmlspecialchars($q));
    $bdd = new PDO('mysql:host=localhost;dbname=autocompletion;charset=utf8', 'root', '');
    $query = $bdd->prepare("SELECT noms,pays,images FROM football WHERE noms = '$q' or pays = '$q'");
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $bdd = null;

    var_dump($results);


    for ($x = 0 ; $x < count($results); $x++){
       
       echo $results[$x]->noms;
       echo $results[$x]->pays;
       ?>
        <img src="image/<?php  echo $results[$x]->images; ?>" class="imgfoot" style="width:150px"> 
       <?php

        // foreach($results[$x] as $row)
        // {
        //     echo $results[$x]->noms;
        //     echo $row;
        // }
    }


// class Pokemon {
	
// 		public function connexionbdd(){

// 			try{
// 				$bdd = new PDO('mysql:host=localhost;dbname=autocompletion;charset=utf8', 'root', '');
// 				return($bdd);
// 			}
// 			catch(PDOException $e){
// 				print "Erreur : ".$e->getMessage();
// 				die(); 
// 			}

// 		}

        

		

//     	}
	
// 	}








?>