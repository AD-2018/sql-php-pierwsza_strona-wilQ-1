<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<div class = "nav">
<h1>Bartosz Wilczek</h1>
    <a href="../pracownicy/index.php">Strona główna</a>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-wilQ-1">github</a>
    <br>
    <br>
    <br>
    <a href="../pracownicy/praciorg.php">Organizacja i Pracownicy</a>
    <a href="../pracownicy/funkcje_agregujace.php">Funkcje agregujące</a>
    
  <a href="../pracownicy/Data_czas.php">Data i Czas</a>
    
  <a href="../pracownicy/formularz.html">Formularz</a>
    
  <a href="../pracownicy/danedobazy.html">Dane do bazy</a>
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
