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

                    echo("<br>Podzespoly<br>");
                    $sql = "SELECT * FROM podzespoly";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    echo('<table border="1">');
                    echo('<th>id</th><th>podzesppol</th>');
                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['id'].'</td><td>'.$row['podzespol'].'</td>');
                    echo('</tr>');
                    }
                    echo('</table>');
                ?>
            </div>
            <div class="ee">
                1
            </div>
            <div class="yy">
                <?php
                    require_once("connect.php");

                    echo("<br>PRODUCENT<br>");
                    $sql = "SELECT * FROM producent";
    
                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    echo('<table border="1">');
                    echo('<th>ID</th><th>producent</th>');
                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['numer'].'</td><td>'.$row['producent'].'</td>');
                    echo('</tr>');
                    }
                    echo('</table>');
                ?>
            </div>
            <div class="ww">
            3
            </div>
            <div class="qq">
                <?php
                    require_once("connect.php");

                    echo("<br>Producent i Podzespol<br>");
                    $sql = "SELECT producent, podzespol from podzespoly, producent where numer=Id order by producent";

                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    echo('<table border="1">');
                    echo('<th>ID</th><th>Producent</th><th>Podzespol</th>');

                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['numer'].'</td><td>'.$row['producent'].'</td><td>'.$row['podzespol'].'</td>');
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
