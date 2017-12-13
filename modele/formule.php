<?php



function recup_formule($c, $encryption_key) {
    $sql = "SELECT * FROM formules ORDER BY id";
    $result = mysqli_query($c,$sql);

    $loop = 0;
    $salles= array ();
    while ($donnees = mysqli_fetch_assoc($result))
    {
        $formules[$loop][0]= $donnees['id'];
        $formules[$loop][1]= $donnees['name'];
        $formules[$loop][2]= $donnees['price'];
        $loop++;
    }
    return $formules;
}


