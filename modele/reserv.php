<?php
function recup_all_reserv($c, $encryption_key){
    $sql = "SELECT * FROM reservation ORDER BY id";
    $result = mysqli_query($c,$sql);
    $loop = 0;
    $reservations= array ();
    while ($donnees = mysqli_fetch_assoc($result))
    {
        $reservations[$loop][0]= $donnees['id'];
        $date=explode("-",$donnees['reservdate']);
        $reservations[$loop][1]=$date[0];
        $reservations[$loop][2]=$date[1];
        $reservations[$loop][3]=$date[2];
        $reservations[$loop][4]= $donnees['creneau'];
        $loop++;
    }
    return $reservations;
}

//script de reservation pour les user
//ajoute dans la bdd les valeurs
//renvoi true si la connection a fonctionné sinon false
function user_reserv($iduser, $idformule, $idsalle, $fnameenfant, $lnameenfant, $age, $date, $creneau, $childnb, $adultnb, $drinknb, $cakenb, $c, $encryption_key) {
    //cryptage du password
    //$password = crypt($password,$encryption_key);
    //insertion des valeurs dans la bdd
    $sql = ("INSERT INTO reservation(iduser, idformule, idsalle, fnameenfant, lnameenfant, age, reservdate, creneau, childnb, adultnb, drinknb, cakenb) VALUES('$iduser','$idformule','$idsalle' ,'$fnameenfant','$lnameenfant' ,'$age', '$date', '$creneau', '$childnb', '$adultnb', '$drinknb', '$cakenb')");
    if(mysqli_query($c,$sql)){
        return true;
    }
    else{
        return false;
    }
}
