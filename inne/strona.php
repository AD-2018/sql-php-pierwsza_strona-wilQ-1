<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<div class = "nav">
<h1>Bartosz Wilczek</h1>
    <a href="index.php">Strona główna</a>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-wilQ-1">github</a>
    <br>
    <br>
    <br>
    <a href="praciorg.php">Organizacja i Pracownicy</a>
    <a href="funkcje_agregujace.php">Funkcje agregujące</a>
    
  <a href="Data_czas.php">Data i Czas</a>
    
  <a href="formularz.html">Formularz</a>
    
  <a href="danedobazy.html">Dane do bazy</a>
    </div>

<hr>
	
<?php
	echo("Usunięto pracownika");

	echo("<ul>");
	echo("<li>".$_POST["firstname"]);
	echo("<li>".$_POST["lastname"]);
	echo("<li>".$_POST["city"]);
	echo("<li>".$_POST["phone"]);
	echo("<li>".$_POST["postcode"]);	
	echo("<ul>");
?>
