<?php


function recup_hall_by_id($id, $c, $encryption_key) {
    $sql = "SELECT * FROM salles WHERE id='$id'";
    $result = mysqli_query($c,$sql);

    $salle= array ();
    if($row = mysqli_fetch_row($result)) {
            $salle[0] = $row['0'];
            $salle[1] = $row['1'];
            $salle[2] = $row['2'];
            $salle[3] = $row['3'];
            return $salle;

        }
    else {
            return false;
    }
}
function recup_all_hall($c, $encryption_key) {
    $sql = "SELECT * FROM salles ORDER BY id";
    $result = mysqli_query($c,$sql);

    $loop = 0;
    $salles= array ();
    while ($donnees = mysqli_fetch_assoc($result))
    {
        $salles[$loop][0]= $donnees['id'];
        $salles[$loop][1]= $donnees['nom'];
        $salles[$loop][2]= $donnees['nbmax'];
        $salles[$loop][3]= $donnees['photo1'];

        $loop++;
    }
    return $salles;
}


