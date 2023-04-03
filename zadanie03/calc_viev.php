<?php //góra strony z szablonu 
include _ROOT_PATH.'/app/templates/top.php';
?>


	<div class='content'>
	<h3> Kalkulator kredytowy </h3>
	<form action="<?php print(_APP_URL);?> /app/calc.php" method= "get">
	<label for="id_x"> Kwota: </label>
	<input id="id_x" type = "text" name="x" value="<?php if(isset($x)) print($x); ?>" />
	<br> 
	<label for="id_y"> Liczba lat: </label>
	<input id="id_y" type = "text" name="y"  value="<?php if(isset($y)) print ($y); ?>" />
	<br>
	<label for="id_z"> Oprocentowanie (%): </label>
	<input id="id_z" type = "text" name="z"  value="<?php if(isset($z)) print ($z); ?>" />
	<br>
	<input type="submit" value="Oblicz" />
	<br> <br>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
	</div>
<div class="messages">
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol class="err";>';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>


<?php if (isset($result)){ ?>
	
	<p class="res"> <b>Wynik</b>:
<?php print($result); ?>
	</p>
<?php } ?>

</div>

<?php //dół strony z szablonu 
include _ROOT_PATH.'/app/templates/bottom.php';
?>
