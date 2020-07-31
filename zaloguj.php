<?php
session_start();
if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
{
    header('Location: logowanie.php');
    header('Location: rejestracja.php');
    exit();
}
require_once "connect2.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if ($polaczenie->connect_errno!=0)
{
    echo "Error: ".$polaczenie->connect_errno;
}
else
{

    $wyslane=$_POST['wyslane'];
    if(isset($wyslane)){
        $login=$_POST['login'];
        $haslo=md5($_POST['haslo']);

        $id=md5("login");
        $hash=md5("haslo");


        if($login===$id && $haslo===$hash){


            echo "zalogowane";

        }
        else echo "Złe dane";

    }
    else echo "Wypełnij pola";

    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
    $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");

    if ($rezultat = @$polaczenie->query(
        sprintf("SELECT * FROM uzytkownicy WHERE login='$login' AND haslo='$haslo'",
            mysqli_real_escape_string($polaczenie,$login),
            mysqli_real_escape_string($polaczenie,$haslo))))
    {
        $ilu_userow = $rezultat->num_rows;
        if($ilu_userow>0)
        {
            $_SESSION['zalogowany'] = true;

            $wiersz = $rezultat->fetch_assoc();
            $_SESSION['id'] = $wiersz['id'];
            $_SESSION['login'] = $wiersz['login'];
            $_SESSION['haslo'] = $wiersz['haslo'];

            unset($_SESSION['blad']);
            $rezultat->free_result();

            header('Location: index.php');
        } else {
            $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
            header('Location: logowanie.php');
        }
    }
    $polaczenie->close();
}
?>