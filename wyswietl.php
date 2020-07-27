<?php
$host="localhost";
$user="root";
$pass="";
$db="baza";
$alert=$_POST['alert'];
$conn=mysqli_connect($host,$user,$pass,$db)or die("blad polaczenia");
$q="SELECT * FROM `todo` ";
$wynik=mysqli_query($conn,$q)or die("blad zapytania");

$id = 1;

echo"<ul>";
    while($row=mysqli_fetch_array($wynik)){
        echo "<li>".$row['nazwa']."<a href='usun.php?id=".$row['id']."'>Usuń</a></li>";
    }
if(isset ($_SESSION["alert"])){
    echo "<script type='text/javascript'>alert('wczytanoooo');</script>";
    unset($_SESSION["alert"]);
}
            ?>

<!--<a href="usun.php?del=--><?php //echo $id ?><!--"usun</a>-->
<!---->
<!--''."<a href='usun.php?del=--><?php //echo $id ?><!--'".'usun'."</a>".-->
<!--<a href="usun.php?del=--><?php //echo $id ?><!--">usun</a>-->

<!--    ''."''."<a href='usun.php?del=--><?php /*echo '$id'' ?>".'usun'."</a>".''.*/