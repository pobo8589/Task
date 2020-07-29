<?php
$host="localhost";
$user="root";
$pass="";
$db="baza";

$conn=mysqli_connect($host,$user,$pass,$db)or die("blad polaczenia");
$q="SELECT * FROM `todo` ";
$wynik=mysqli_query($conn,$q)or die("blad zapytania");
$id = 1;

echo"<ul>";
    while($row=mysqli_fetch_array($wynik)){
        echo "<li>".$row['nazwa']."<a href='usun.php?id=".$row['id']."'>Usuń</a></li>";
    }
            ?>

