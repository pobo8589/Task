<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="baza";
$msg = "jasgdjkasgjdgh";
$conn=mysqli_connect($host,$user,$pass,$db)or die("blad polaczenia");
$q="SELECT * FROM `todo` ";
$wynik=mysqli_query($conn,$q)or die("blad zapytania");

$id = 1;

echo"<ul>";
    while($row=mysqli_fetch_array($wynik)){
        echo "<li>".$row['nazwa']."<a href='usun.php?id=".$row['id']."'>Usuń</a></li>";
    }

if(isset($_SESSION['$msg']))  echo $_SESSION['$msg'];
session_destroy();
            ?>

<!--<a href="usun.php?del=--><?php //echo $id ?><!--"usun</a>-->
<!---->
<!--''."<a href='usun.php?del=--><?php //echo $id ?><!--'".'usun'."</a>".-->
<!--<a href="usun.php?del=--><?php //echo $id ?><!--">usun</a>-->

<!--    ''."''."<a href='usun.php?del=--><?php /*echo '$id'' ?>".'usun'."</a>".''.*/