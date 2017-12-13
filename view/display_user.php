<?php
//formulaire de d'inscription streamer
function display_user_sub(){
	echo"
		<div class='wrapper' div='body-wrapper'>
		        <div id='extra' class='container'>
		            <form action='index.php?ac=signup' method='post'>
		                <div class='div_menu_line'>
		                    <div id='three-column'>
		                        <div class='boxalone'>
		                            <div class='box'> <span class='fa fa-user'></span>
		                                <input type='text' name='email' placeholder='adresse e-mail' required/>
		                                <input type='password' placeholder='mot de passe' name='password' required/>
		                                <input type='text' placeholder='Prenom' name='fname' required/>
		                                <input type='text' placeholder='Nom' name='lname' required/>
		                                <input type='text' placeholder='telephone' name='tel' required/>
		                                <input type='text' placeholder='addresse' name='adressepostal' required/>
		                                <input type='text' placeholder='code postal' name='codepostal' required/>
		                                <input type='text' placeholder='Ville' name='ville' required/>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class='div_menu_line'>
		                <ul class='actions'>
		                    <li><input type='submit' class='button'  value='valider' name='Inscription'></li>
		                </ul>
		                </div>
		            </form>
		        </div>
		    </div>
		";
}
//formulaire de reservation
function display_user_reserv($salle, $formules, $reservs){
    var_dump($reservs);
    $loop = 0;
    echo"<script> ";
    echo"var Formules = new Array();";
    foreach ($formules as $formule){
        echo  'Formules['.$loop.'] =["'.implode('","', $formule).'"];';
        $loop++;
    }
    echo"</script> ";
    $loop = 0;
    echo"<script> ";
    echo"var Reservs = new Array();";
    foreach ($reservs as $reserv){
        echo  'Reservs['.$loop.'] =["'.implode('","', $reserv).'"];';

        $loop++;
    }
    echo"</script> ";

    echo"
	<div class='wrapper' div='body-wrapper'>
		<div class='wrapper' div='body-wrapper'>
        <div id='extra' class='container'>
            <form action='index.php?ac=reserv' method='post'>
                <div class='div_menu_line'>
                    <div id='three-column'>
                            <select id='select' name='formule' oninput='cost_calculator(Formules,".$salle['2'].")'>";
                            foreach ($formules as $formule){
                                echo"<option id='".$formule[0]."'>".$formule[1]."</option>";
                            }

                            echo"
                            </select>
                            <input type='hidden' id='idformule' name='idformule' value='0'>
                            <input type='hidden' id='idsalle' name='idsalle' value='".$salle[0]."'>
                            <table class='ds_box' cellpadding='0' cellspacing='0' id='ds_conclass' style='display: none;'>
                                <tr>
                                    <td id='ds_calclass'></td>
                                </tr>
                            </table>
                            <p>prenom de l'enfant :</p>
                            <input type='text' name='fnameenfant'>
                            <p>nom de l'enfant :</p>
                            <input type='text' name='lnameenfant'>
                            <p>age de l'enfant :</p>
                            <input type='number' name='age'>
                            <p>date :</p>
                            <input type='text' name='date'  onclick='ds_sh(this)'>
                            <p>creneau :</p>
                            <input id='creneau' type='text' name='creneau' value=''>
                            <p>Nombre d'enfant supplémentaire</p>
                            <input id='enfant' type='number' name='childnb'  oninput='cost_calculator(Formules,".$salle['2'].")' value='0'>
                            <p>Nombre d'adultes supplémentaire</p>
                            <input id='adult' type='number' name='adultnb'  oninput='cost_calculator(Formules,".$salle['2'].")' value='0'>
                            <p>Boisson Supplémentaire</p>
                            <input id='drink' type='number' name='drinknb'  oninput='cost_calculator(Formules,".$salle['2'].")' value='0'>
                            <p>Voulez-vous un gateau supplémentaires?</p>
                            <input id='cake' type='number' name='cakenb'  oninput='cost_calculator(Formules,".$salle['2'].")' value='0'>
                            <p>prix total</p>
                            <input type='text' id='cost_result' value='0' >
                    </div>
                </div>
                <div class='div_menu_line'>
                <ul class='actions'>
                    <li><input type='submit' class='button' id='submit_button' value='valider' name='subscribe' disabled></li>
                </ul>
                </div>
            </form>
        </div>
    </div>
		";
}

//choix de la salle
function display_hall_select($salles){
    echo"
	<div class='wrapper' div='body-wrapper'>
		<div class='wrapper' div='body-wrapper'>
        <div id='extra' class='container'>
            <form action='index.php?reservform=reserv' method='post'>
                <div class='div_menu_line'>
                    <div id='three-column'>";
                       foreach ($salles as $salle){
                           echo"<div class='hall-choice'>";
                           echo $salle["1"];
                           echo $salle["2"];
                           echo $salle["3"];
                           echo "<input type='radio' name='hall-choice' value=".$salle['0'].">";
                           echo"</div>";
    }
     echo"               </div>
                </div>
                <div class='div_menu_line'>
                <ul class='actions'>
                    <li><input type='submit' class='button' value='valider' name='subscribe'></li>
                </ul>
                </div>
            </form>
        </div>
    </div>
		";
}


//prend un pseudo de streamer
//affiche le pseudo du streamer
function display_user_log($pseudo, $mail){
	echo "
	<div class='wrapper' div='body-wrapper'>
		<div id='extra' class='container'>
			<div class='title'>
				<h2>espace personnel :</h2>
			 </div>
			
		</div>
	</div>
	";

}