<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=portfolio;charset=UTF8', 'root');
} catch(PDOException $e){
    echo "Erreur :" . $e->getMessage();
}


//    $host_name = 'db5012904801.hosting-data.io';
  // $database = 'dbs10838740';
  // $user_name = 'dbu5426520';
  // $password = 'S006482o&';
  // $dbh = null;

  // try {
  //   $db = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
  // } catch (PDOException $e) {
  //   echo "Erreur!:" . $e->getMessage() . "<br/>";
  //   die();
  // }


$sql = ("SELECT `id_projet`, `title`,`thumbnail`, `resume`, `frontEnd`, `created_at`, `link` FROM `projet` ORDER BY `id_projet` ");
    $req = $db->query($sql);

    ?>