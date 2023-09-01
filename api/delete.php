<?php
    require_once '/Users/carolle/Documents/portfolio/herborist_api/connection.php';

    $id_coaching_delete = $_POST['id'];

    $id_coaching_delete = mysqli_real_escape_string($connection, $_POST['id']);

    $query_coaching_delete = "DELETE FROM coachings WHERE id = $id_coaching_delete";
    $result_coaching_delete = mysqli_query($connection, $query_coaching_delete);

    if ($result_coaching_delete) {
        echo json_encode(array('message' => 'Suppression réussie'));
    } else {
        echo json_encode(array('message' => 'Erreur pendant la suppression : ' . mysqli_error($connection)));
    }
    
    mysqli_close($connection);

?>