<?php
    require_once '/Users/carolle/Documents/portfolio/herborist_api/connection.php';

    $name_coaching_update = $_POST['nom'];
    $image_coaching_update = $_POST['image'];
    $id_coaching_update = $_POST['id'];

    $query_coaching_update = "UPDATE coachings 
    SET nom = '$name_coaching_update', image = '$image_coaching_update'
    WHERE id = $id_coaching_update";
    $result_coaching_update = mysqli_query($connection, $query_coaching_update);

    if ($result_coaching_update) {
        echo json_encode(array('message' => 'Modification réussie'));
    } else {
        echo json_encode(array('message' => 'Erreur pendant la modification : ' . mysqli_error($connection)));
    }
    
    mysqli_close($connection);
?>