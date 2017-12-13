<?php

try
{
		$c = mysqli_connect("localhost", "root", "", "openfive");
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage(failed));
}
?>