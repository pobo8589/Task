<?php
session_start();
    $msg = "jasgdjkasgjdgh";

if(isset($_SESSION["msg"]) && !empty($_SESSION["msg"])) {
    $msg = $_SESSION["msg"];
    echo '<div class="alert alert-success" role="alert">'.'<p>' . $msg . '</p>'.'</div>';
    unset($_SESSION['msg']);
}
    session_destroy();

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

<!--session_start();-->
<!--if (isset($_SESSION['message']))-->
<!--{-->
<!--echo $_SESSION['message'];-->
<!--unset($_SESSION['message']);-->
<!--}-->