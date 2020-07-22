
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="styll.css">
    <title>Todo!</title>
</head>
<body>
<section class="sekcja">
    <h1>TO-DO LIST</h1>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h2>All Tasks</h2>

                <div class="content">
                    <form action="dodaj.php" method="post">
                        <input type="hidden" name="id" value="<?=$row['id']?>" />
                        <label>Create a new task: <br><input type="text" name="nazwa" id="pole"> </label>
                        <input type="submit" value="Wyślij">
<!--                       <button id="add" type="button">Dodaj</button><br>-->
                        <div id="napis"></div>
                </div>
                   </form>
                    <table>
                        <ul id="lista">
                            <?php include("wyswietl.php"); ?>
                        </ul>
                    </table>
                </div>
            </div>
        </div>
</section>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>

    let button = document.getElementById('add');
    button.addEventListener('click', myFunction, false);
    function myFunction() {
        var pole = document.getElementById("pole");
        var lista = document.getElementById('lista');
        var nowePole = "<li>"+ pole.value +"<button type=\"button\" class=\"btn btn-danger\">x</button>" + "</li>";
        lista.innerHTML = lista.innerHTML + nowePole;
        document.querySelectorAll('li button').forEach(item => item.addEventListener('click', removeTask));
    };
    const removeTask = (e) => {
        e.target.parentNode.remove();
    }
    document.querySelectorAll('li button').forEach(item => item.addEventListener('click', removeTask));


</script>
</body>
</html>

<!--+"<li>"+ pole.value +"<button type=\"button\" class=\"btn btn-danger\">x</button>" + "</li>"-->