  <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Bartosz Wilczek</h1>
    <nav>
    <ul>
            <li><a href="index.php">Strona główna</li></a>
            <li><a href="https://github.com/AD-2018/sql-php-pierwsza_strona-wilQ-1">github</li></a>
            <li><a href="praciorg.php">Organizacja i Pracownicy</li></a>
            <li><a href="funkcje_agregujace.php">Funkcje agregujące</li></a>
            <li><a href="Data_czas.php">Data i Czas</li></a>
            <li><a href="formularz.html">Formularz</li></a>
            <li><a href="danedobazy.php">Dodawanie i usuwanie</li></a>
    </ul>
    </nav>
<?php
echo $_POST['id_pracownicy'];

require "connect.php";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM pracownicy WHERE id_pracownicy=".$_POST['id_pracownicy'];

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "<br>Record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
