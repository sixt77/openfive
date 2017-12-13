<?php
if($page =="home"){
	display_home();
}
var_dump($page);
if($page =="user_log"){
	display_user_log($_SESSION['pseudo'],$_SESSION['mail']);
}  elseif ( ($page =="user_sub")) {
	display_user_sub();	
}

elseif ( ($page =="user_reserv")) {
	display_user_reserv($salle, $formules, $reservs);
}

elseif ( ($page =="hall-select")) {
    display_hall_select($salles);

}
elseif ( ($page =="reserv_failed")) {
	display_reserv_failed();	
}
 elseif ( ($page =="connection_failed")) {
	display_signin_failed();
} 
elseif ( ($page =="sub_failed")) {
	display_signup_failed();
}
elseif ( ($page =="update_info_form")) {
	update_info_form($_SESSION['id'], $_SESSION['pseudo'], $_SESSION['twitch'], $_SESSION['mail'], $_SESSION['workername']);
}


