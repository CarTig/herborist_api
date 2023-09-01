<?php
    require_once '/Users/carolle/Documents/portfolio/herborist_api/connection.php';

    $name_coaching = $_POST['nom'];
    $image_coaching = $_POST['image'];

    $query_coaching = "INSERT INTO coachings (nom,image) VALUES ('$name_coaching', '$image_coaching')";
    $result_coaching = mysqli_query($connection, $query_coaching);

    if ($result_coaching) {
        echo json_encode(array('message' => 'Ajout réussi'));
    } else {
        echo json_encode(array('message' => 'Erreur pendant l\'ajout : ' . mysqli_error($connection)));
    }
    
    mysqli_close($connection);
?>