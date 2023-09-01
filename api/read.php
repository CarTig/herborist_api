<?php
    require_once '/Users/carolle/Documents/portfolio/herborist_api/connection.php';

    //connexion avec la base de données, la table coachings
    $query = 'SELECT * FROM coachings';
    $result = mysqli_query($connection, $query);

    //stockage et conversion du resultat dans un tableau associatif 
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    //encodage et renvoie de $data au format json
    echo json_encode($data, JSON_UNESCAPED_UNICODE);

?>
