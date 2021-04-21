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
                     
                    echo("<br>select * from Autorzy<br>");
                    $sql = "select * from Autorzy";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    echo('<table border="1">');
                    echo('<th>ID</th><th>Autor</th>');

                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['ID'].'</td><td>'.$row['Autor'].'</td>');
                    echo('</tr>');
                    }

                    echo('</table>');


                ?>
            </div>
            <div class="ee">
                1
            </div>
            <div class="skrypt2">
                <?php
                    require_once("connect.php");

                    echo("<br>select * from Tytul<br>");
                    $sql = "select * from Tytul";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    echo('<table border="1">');
                    echo('<th>ID</th><th>Tytul</th>');
                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['ID'].'</td><td>'.$row['Tytul'].'</td>'
                         '<td>

                    <form action="deltabela2.php" method="POST">
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
            3
            </div>
            <div class="skrypt3">
                <?php
                    
require_once("connect.php");

                    echo("<br>select i_d, Autor, Tytul from Autorzy, Tytul where i_d=ID order by Autor asc;<br>");
                    $sql = "select i_d, Autor, Tytul from Autorzy, Tytul where i_d=ID order by Autor asc;";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    echo('<table border="1">');
                    echo('<th>ID</th><th>Autor</th><th>Tytul</th');
                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['i_d'].'</td><td>'.$row['Autor'].'</td><td>'.$row['Tytul'].'</td>');
                    echo('</tr>');
                    }
                    echo('</table>');

                ?>
            </div>
            <div class="zolte">
                5
            </div>
        </div>
    </body>
</html>
