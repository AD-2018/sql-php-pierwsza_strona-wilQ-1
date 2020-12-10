<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Bartosz Wilczek</h1>
    <nav>
    <ul>
            <li><a href="index.php">Strona główna</li></a>
            <li><a href="https://github.com/AD-2018/sql-php-pierwsza_strona-wilQ-1">github</li></a>
            <li><a href="praciorg.php">Organizacja i Pracownicy</li></a>
            <li><a href="funkcje_agregujace.php">Funkcje agregujące</li></a>
            <li><a href="Data_czas.php">Data i Czas</li></a>
            <li><a href="formularz.html">Formularz</li></a>
            <li><a href="danedobazy.php">Dodawanie i usuwanie</li></a>
    </ul>
    </nav>
<?php
     require_once("connect.php");
    
      echo("<h3> ZAD 1 </h3>");
$sql = "SELECT sum(zarobki) FROM pracownicy";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>suma_zarobkow</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["sum(zarobki)"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
 
    echo("<h3> ZAD 2 </h3>");
$sql = "SELECT sum(zarobki) FROM pracownicy where imie like'%a'";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>suma_zarobkow_kobiet</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["sum(zarobki)"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    echo("<h3> ZAD 3 </h3>");
$sql = "SELECT sum(zarobki) FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=3 OR dzial=2)";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>suma_zarobkow_mężczyzn(działy 2 i 3)</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["sum(zarobki)"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
   
    
    echo("<h3> ZAD 4 </h3>");
$sql = "SELECT avg(zarobki) FROM pracownicy WHERE imie LIKE '%a'";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>srednia_zarobkow_mężczyzn(działy 2 i 3)</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["avg(zarobki)"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
   
    
      echo("<h3> ZAD 5 </h3>");
$sql = "SELECT avg(zarobki) FROM pracownicy WHERE dzial=4";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>srednia_zarobkow_dział(4)</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["avg(zarobki)"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    
    echo("<h3> ZAD 6 </h3>");
$sql = "SELECT avg(zarobki) FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=1 OR dzial=2)";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>srednia_zarobkow_mezczyzn_dział(1 i 2)</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["avg(zarobki)"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    
    echo("<h3> ZAD 7 </h3>");
$sql = "SELECT count(imie) FROM pracownicy";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>ilosc_pracownikow</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["count(imie)"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    
    echo("<h3> ZAD 8 </h3>");
$sql = "SELECT count(imie) FROM pracownicy where imie like'%a'";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>ilosc_pracownikow(kobiety)</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["count(imie)"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    echo ("<h3>GROUP BY</h3>");
    
    echo("<h3> ZAD 9 </h3>");
$sql = "SELECT sum(zarobki),nazwa_dzial FROM pracownicy,organizacja WHERE dzial = id_org GROUP BY dzial";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>suma zarobków</th><th>nazwa _dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["sum(zarobki)"].'</td><td>'.$row["nazwa_dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    echo("<h3> ZAD 10 </h3>");
$sql = "SELECT count(id_pracownicy),nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org GROUP BY dzial ";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>id_pracownicy</th><th>nazwa _dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["count(id_pracownicy)"].'</td><td>'.$row["nazwa_dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    echo("<h3> ZAD 11 </h3>");
$sql = "SELECT avg(zarobki),nazwa_dzial FROM pracownicy,organizacja GROUP BY dzial";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>srednia_zarobkow</th><th>nazwa _dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["avg(zarobki)"].'</td><td>'.$row["nazwa_dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    echo ("<h3>HAVING</h3>");
    
    echo("<h3> ZAD 12 </h3>");
$sql = "SELECT sum(zarobki),nazwa_dzial from pracownicy, organizacja GROUP BY dzial HAVING sum(zarobki) < 28 ";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>suma_zarobkow</th><th>nazwa _dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["sum(zarobki)"].'</td><td>'.$row["nazwa_dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    echo("<h3> ZAD 13 </h3>");
$sql = "SELECT avg(zarobki),nazwa_dzial from pracownicy, organizacja WHERE imie not like '%a'GROUP BY dzial HAVING avg(zarobki) > 30";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>srednia_zarobkow_mezczyzn</th><th>nazwa _dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["avg(zarobki)"].'</td><td>'.$row["nazwa_dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    echo("<h3> ZAD 14 </h3>");
$sql = "SELECT count(id_pracownicy),nazwa_dzial from pracownicy, organizacja WHERE dzial=id_org GROUP BY dzial HAVING count(id_pracownicy) > 3";
    echo ("<li>".$sql."</li><br><br>");
$result = mysqli_query($conn, $sql);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>ilosc_pracownikow</th><th>nazwa _dzial</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["count(id_pracownicy)"].'</td><td>'.$row["nazwa_dzial"].'</td>');
                echo ('</tr>');
        }echo ('</table>');
    
    
    ?>
</body>
</html>
