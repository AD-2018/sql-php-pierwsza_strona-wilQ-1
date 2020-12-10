<!DOCTYPE html>
<html>
<head>
  <title>Dodawanie i usuwanie</title>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
</head>
<body>
	Dodawanie pracownika<br>
	<form action="insert.php" method="POST">
			<label for="imie"> Imie </label>
			<input type="text" name="imie"><br>
			<label for "dzial">Dzial</label>
			<input type="number" name="dzial"><br>
			<label for="zarobki">Zarobki</label>
			<input type="number" name="zarobki"><br>
			<label for="data_urodzenia">Data urodzenia</label>
			<input type="date" name="data_urodzenia"><br>
			<label for="dodaj pracownika">dodaj pracownika</label>						
			<input type="submit" value="dodaj pracownika"><br>				     	
	</form>
<br>
<br>
<br> Usuń pracownika
<form action="delete.php" method="POST">
   <input type="number" name="id_pracownicy"><br>
   <input type="submit" value="Usuń pracownika"><br>
</form>
<?php
require "connect.php";
$conn=new mysqli($servername,$username,$password,$dbname);

$sql="select * from pracownicy"; 
echo("<h3>Tabela pracowników:</h3>"); 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th><th>Zwolnij pracownika</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){
  echo("<tr>");
echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['dzial'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td>'.
'<td>
<form action="delete.php" method="POST">
<input name="id_pracownicy" value="'.$row['id_pracownicy'].'" hidden>
<input type="submit" value="Usuń Pracownika">
</form>
</td>');
echo("</tr>"); } 
echo('</table>'); 
?>
</body>
</html>
