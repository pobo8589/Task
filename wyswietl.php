<?php
$host="localhost";
$user="root";
$pass="";
$db="baza";
$conn=mysqli_connect($host,$user,$pass,$db)or die("blad polaczenia");
$q="SELECT * FROM `todo` ";
$wynik=mysqli_query($conn,$q)or die("blad zapytania");
//$id = (int)$_POST['id'];
echo"<ul>";
    while($row=mysqli_fetch_array($wynik)){
//    echo"<li>".$row['nazwa']."</li>";
      echo "<li>".$row['id'].': '.$row['nazwa'].''.<a href='usun.php?del='<?php echo "$id" ?>'.'usun'."</a>".''."</li>";

    }
echo"</ul>";
            ?>

<!--<a href="usun.php?del=--><?php //echo $id ?><!--"usun</a>-->
<!---->
<!--''."<a href='usun.php?del=--><?php //echo $id ?><!--'".'usun'."</a>".-->
<!--<a href="usun.php?del=--><?php //echo $id ?><!--">usun</a>-->

    ''."''."<a href='usun.php?del=<?php echo '$id'' ?>".'usun'."</a>".''.