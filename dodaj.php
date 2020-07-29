<?php
require ("connect.php");
$tytul = $_POST['nazwa'];

$sql="INSERT INTO `todo`(`nazwa`) VALUES ('$tytul')";
$result = $conn->query($sql);
$q="SELECT * FROM `todo` ";
echo"<ul>";
while($row=mysqli_fetch_array($result)){
    echo"<li>".$row['nazwa']."</li>";
}
echo"</ul>";
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST'){
    echo '<div id="napis">metoda post</div>';
    header("Location: index.php");
} elseif ($method == 'GET'){
    echo '<div id="napis">Metoda GET nie pozwala na wyświetlenie storny</div>';
}

?>
