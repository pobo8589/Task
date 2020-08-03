<?php
session_start();


require_once "connect2.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);



if (isset($_POST['rejestruj']))
{
    $login = ($_POST['login']);
    $haslo=md5($_POST['haslo']);
    $haslo1=md5($_POST['haslo']);



        if ($haslo == $haslo1) // sprawdzamy czy hasła takie same
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

//            mysqli_query("INSERT INTO `uzytkownicy`(`login`,`haslo`) VALUES ('$login','$haslo')";
$sql="INSERT INTO `uzytkownicy`(`login`,`haslo`) VALUES ('$login','$haslo')";
$result = $polaczenie->query($sql);
            echo "Konto zostało utworzone!";
            header('Location: index.php');
        }
        else echo "Hasła nie są takie same";
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <title>Logowanie</title>
    <link rel="stylesheet" href="stylee.css" type="text/css"/>

</head>

<body>

<!--<form method="POST" action="rejestracja.php">-->
<!--    <b>Login:</b> <input type="text" name="login"><br><br>-->
<!--    <b>Hasło:</b> <input type="password" name="haslo"><br><br>-->
<!--<!--    <b>Powtórz hasło:</b> <input type="password" name="haslo1"><br><br>-->-->
<!--    <input type="submit"  class="btn login_btn" value="Utwórz konto" name="rejestruj">-->
<!--</form>-->
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form method="POST" action="rejestracja.php">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="login" class="form-control input_user" value="login" placeholder="username">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="haslo" class="form-control input_pass" value="hasło" placeholder="password">
                    </div>
                    <!--                    <div class="form-group">-->
                    <!--                        <div class="custom-control custom-checkbox">-->
                    <!--                            <input type="checkbox" class="custom-control-input" id="customControlInline">-->
                    <!--                            <label class="custom-control-label" for="customControlInline">Remember me</label>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <input type="submit" name="rejestruj" value="rejestruj" class="btn login_btn">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</form>
</body>
</html>