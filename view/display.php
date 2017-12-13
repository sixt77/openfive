<?php
function display_home(){
	echo"
		<div class='wrapper' div='body-wrapper'>
		<div id='extra' class='container'>
			<div class='title'>
				<h2>Openfive</h2> <h3>c'est quoi?<h3>
			 </div>
			<ul class='actions'>
				<li><a href='index.php?subform=streamer'><input type='button' id='control_button' onclick='update()' value='inscription' class='button'></a></li>
			</ul>
		</div>
	</div>
	";
}

//se sert de la variable de session
//affiche les variable de session
function display_user_session(){
	if(isset($_SESSION['id'])){
		echo "
			<div class='wrapper'>
				<div id='header-wrapper'>
					<div id='header' class='container'>
						<div id='logo'>
							<h1><a href='index.php?home'>Justwatch</a></h1>
						</div>
						<div id='menu'>
							<ul id='header-menu'>

									<li><input type='text' class='text_input' name='pseudo' placeholder='".$_SESSION['pseudo']."' disabled></li>
									<li><a href='index.php'><input type='text' class='text_input' name='password' placeholder='espace perso' disabled></a></li>
									<li><a href='index.php?logout=disc'><input type='button' class='button'  value='déconnection' name='logout'></a></li>
									<li><a href='index.php?reservform=hall-select' title=''><input type='button' class='button'  value='reservation' name='subscribe'></a></li>
										

							</ul>
						</div>
					</div>
				</div>
			</div>";
	}else{
		echo"

			<div class='wrapper'>
				<div id='header-wrapper'>
					<div id='header' class='container'>
						<div id='logo'>
							<h1><a href='index.php?home'>Justwatch</a></h1>
						</div>
						<div id='menu'>
							<ul id='header-menu'>
								<form action='index.php?ac=signin' method='post'>
									<li><input type='text' class='text_input'
									 name='pseudo' placeholder='identifiant' required></li>
									<li><input type='text' class='text_input' name='password' placeholder='mot de passe' required></li>
									<li><input type='submit' class='button'  value='Valider' name='subscribe'></a></li>
									<li><a href='index.php?subform=streamer' title=''><input type='button' class='button'  value='inscription' name='subscribe'></a></li>
								</form>
							</ul>
						</div>
					</div>
				</div>
			</div>
		";
	}
}
function display_signin_failed(){
	echo"
	<div class='wrapper' div='body-wrapper'>
		<div id='extra' class='container'>
			<form action='index.php?ac=signup' method='post'>
				<div class='div_menu_line'>
					<div id='three-column'>
						<div class='boxalone'>
							<div class='box'> <span class='fa fa-user'></span>
								<p>connexion réfusé.</p>
								<p>identifiant ou mot de pass incorect !</p>
							</div>
						</div>
					</div>
				</div>
				<div class='div_menu_line'>
				<ul class='actions'>
					<li><a href='index.php'><input type='button' class='button'  value='retour' name='subscribe'></a></li>
				</ul>
				</div>
			</form>
		</div>
	</div>
	";
}

function display_signup_failed(){
	echo"
	<div class='wrapper' div='body-wrapper'>
		<div id='extra' class='container'>
			<form action='index.php?ac=signup' method='post'>
				<div class='div_menu_line'>
					<div id='three-column'>
						<div class='boxalone'>
							<div class='box'> <span class='fa fa-user'></span>
								<p>l'inscription n'a pas fonctionné.</p>
							</div>
						</div>
					</div>
				</div>
				<div class='div_menu_line'>
				<ul class='actions'>
					<li><a href='index.php'><input type='button' class='button'  value='retour' name='subscribe'></a></li>
				</ul>
				</div>
			</form>
		</div>
	</div>
	";
}
function display_reserv_failed(){
	echo"
	<div class='wrapper' div='body-wrapper'>
		<div id='extra' class='container'>
			<form action='index.php?ac=signup' method='post'>
				<div class='div_menu_line'>
					<div id='three-column'>
						<div class='boxalone'>
							<div class='box'> <span class='fa fa-user'></span>
								<p>la reservation n'a pas fonctionné.</p>
							</div>
						</div>
					</div>
				</div>
				<div class='div_menu_line'>
				<ul class='actions'>
					<li><a href='index.php'><input type='button' class='button'  value='retour' name='subscribe'></a></li>
				</ul>
				</div>
			</form>
		</div>
	</div>
	";
}