<?php
$host="localhost";
$user="root";
$pass="";
$db="baza";
$conn=mysqli_connect($host,$user,$pass,$db)or die("blad polaczenia");
$id = (int)$_GET['id'];
$query= mysqli_query("SELECT * FROM todo WHERE id='.$id.'  ORDER BY id  LIMIT 1");
$q='DELETE FROM `todo` WHERE `id`='.$id.'';
$wynik=mysqli_query($conn,$q)or die("blad zapytania");
header("Location: index.php");

if (isset ($_POST['del']))
{
    $id=$_POST['del'];
    $query= "delete from todo where id=".$id."";
    $result= mysqli_query($conn,$query);
    $message = 'Poprawnie usunięto rekord o id: '.$id;
    if($result)
    {
        header("Location: index.php");
    }
}
?>