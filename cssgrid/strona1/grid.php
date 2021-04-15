<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bartosz Wilczek</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div class="container">
            <div class="hh">
                <?php
                    require_once("connect.php");
                     
                    echo("<br>SELECT imie_nazwisko, klasa from Klasy, Nauczyciele where id_klasy=Id order by klasa asc<br>");
                    $sql = "SELECT imie_nazwisko, klasa from Klasy, Nauczyciele where id_klasy=Id order by klasa asc";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    echo('<table border="1">');
                    echo('<th>imie i nazwisko</th><th>klasa</th>');

                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['imie_nazwisko'].'</td><td>'.$row['klasa'].'</td>');
                    echo('</tr>');
                    }

                    echo('</table>');

                ?>
            </div>
            <div class="ww">
                1
            </div>
            <div class="qq">
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
            <div class="yy">
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
