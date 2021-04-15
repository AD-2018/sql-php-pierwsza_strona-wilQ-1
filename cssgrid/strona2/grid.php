<!DOCTYPE html>
<html lang="en">
    <head>
        <a class="panel" href="/cssgrid/index.php">Wróć</a>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0: />
    <meta http=equiv="X-UA-Compatible" content="ie=edge" />
    <title>CSS grid</title>
   <link rel="stylesheet" href="style.css">
   </head>  
  
<body>
    <div class="container">
      <div class="hh">                                        
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
            <div class="ww">
                1
            </div>
            <div class="qq">
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
                    echo('<td>'.$row['ID'].'</td><td>'.$row['Tytul'].'</td>');
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
        </div>
    </body>
</html>
