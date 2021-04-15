<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bartosz Wilczek</title>
        <link rel="stylesheet" href="style.css"/>
   </head>  
   <body>                              
       <div class="container">
       <div class="jeden">
           costam
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
                    echo('<th>imie_nazwisko</th><th>klasa</th>');
                    }
                    while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['imie_nazwisko'].'</td><td>'.$row['klasa'].'</td>');
                    echo('</tr>');
                    }

                    echo('</table>');
                  ?>
        </div>
          </div>
</body>
</html>
