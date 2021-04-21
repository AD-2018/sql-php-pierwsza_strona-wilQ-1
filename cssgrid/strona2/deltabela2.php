    <?php
echo("usuwanie");
echo $_POST['ID'];


require_once("/connect.php");


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM Tytul WHERE ID=".$_POST['ID'];

echo $sql;

if ($conn->query($sql) === TRUE) {
    header ('Location:https://php-wilczek.herokuapp.com/cssgrid/strona2/grid.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
