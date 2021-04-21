<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bartosz Wilczek</title>
        <link rel="stylesheet" href="style.css"/>
        <a class="panel" href="/cssgrid/index.php">Wróć</a>
    </head>
    <body>
        <div class="container">
            <div class="skrypt1">
                <?php
                    require_once("connect.php");
                     
                    echo("<br>SELECT id_naucz as ID, imie_nazwisko, klasa from Klasy, Nauczyciele where id_klasy=Id order by klasa asc<br>");
                    $sql = "SELECT id_naucz as ID, imie_nazwisko, klasa from Klasy, Nauczyciele where id_klasy=Id order by klasa asc";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    echo('<table border="1">');
                    echo('<th>ID</th><th>imie i nazwisko</th><th>klasa</th>');

                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['id_naucz']'</td><td>'.$row['imie_nazwisko'].'</td><td>'.$row['klasa'].'</td>''<td>.

                    <form action="delnauczyciele.php" method="POST">
                            <input type="text" name="id" value="'.$row["id"].'" hidden>
                            <input type="submit" value="Usun">
                        </form>
              </td>');
                    echo('</tr>');
                    }

                    echo('</table>');

                ?>
            </div>
            <div class="ww">
                1
            </div>
            <div class="skrypt2">
                <?php
                    require_once("connect.php");

                    echo("<br>SELECT id_naucz, imie_nazwisko  FROM Nauczyciele<br>");
                    $sql = "SELECT id_naucz, imie_nazwisko  FROM Nauczyciele";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    echo('<table border="1">');
                    echo('<th>ID</th><th>Nauczyciel</th>');
                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['id_naucz'].'</td><td>'.$row['imie_nazwisko'].'</td>');
                    echo('</tr>');
                    }
                    echo('</table>');
                ?>
            </div>
            <div class="ee">
                4
            </div>
            <div class="skrypt3">
                <?php
                    require_once("connect.php");

                    echo("<br>SELECT * FROM Klasy<br>");
                    $sql = "SELECT * FROM Klasy";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    echo('<table border="1">');
                    echo('<th>ID</th><th>Klasa</th>');
                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['Id'].'</td><td>'.$row['i_klasa'].'</td>');
                    echo('</tr>');
                    }
                    echo('</table>');
                ?>
            </div>
        </div>
    </body>
</html>
