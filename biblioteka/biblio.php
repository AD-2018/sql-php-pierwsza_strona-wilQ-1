<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
  
<?php
require_once("connect.php");

echo("<br>zad. 1<br>");
$sql = "SELECT * FROM biblAutor";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Id</th><th>Autor</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['autor'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
  
  echo("<br>zad. 2<br>");
$sql = "SELECT * FROM biblTytul";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
   echo('<th>Id</th><th>Tytul</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['tytul'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
  
echo("<br>zad. 3<br>");
$sql = "SELECT * FROM biblAutor_biblTytul";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Id</th><th>Id Autor</th><th>Id tytuł</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['biblAutor_id'].'</td><td>'.$row['biblTytul_id'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
?>
?>
</body>
</html>
