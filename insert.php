<head>
  <link rel="stylesheet" href="style.css">
</head>
<?php
echo "<li>".$_POST['imie'];
echo "<li>".$_POST['dzial'];
echo "<li>".$_POST['zarobki'];
echo "<li>".$_POST['data_urodzenia'];


$servername = "mysql-wilczekbartosz.alwaysdata.net";
$username = "219956";
$password = "Galareta123";
$dbname = "wilczekbartosz_sql";

$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null, '".$_POST['imie']."', '".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";
echo("<br>");
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
