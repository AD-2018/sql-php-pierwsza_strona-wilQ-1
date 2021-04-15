  
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0: />
    <meta http=equiv="X-UA-Compatible" content="ie=edge" />
     <title>Bartosz Wilczek</title>
   <link rel="stylesheet" href="style.css">
   </head>  
   <body>
       <div class="container">
            <header>
      <div class="tabela1">
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
      </header>
      <nav>
      2
      </nav>
      <main>
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
      </main>
      <footer>
      4
      </footer>
      <aside>
      <div class="tabela1">
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
      </aside>
    </div>
  </body>
</html>
