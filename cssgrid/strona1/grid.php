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
                                     
       <div class="1">
        <?php
         require_once("../../connect.php");

           echo("<br>Nauczyciele i klasy<br>");
                    $sql = "SELECT imie_nazwisko, klasa from Klasy, Nauczyciele where id_klasy=Id order by klasa asc";
                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    echo('<table border="1">');
                    echo('<th>imie_nazwisko</th><th>PRAWNIK</th><th>SPRAWA</th>');
                    }

                    echo('</table>');
                  ?>
</body>
</html>
