<?php
if (!isset($_SESSION)) session_start();


if (isset($_POST['signup'])) {
    $data = new DateTime('now', new DateTimeZone('Europe/Madrid'));
    $data_creacio = $data->format("d-m-Y");

    //formatter($data);
    //$_POST['date'] = $_POST['date']->format("d/m/Y");
    $user = array(
        "id" => $_SESSION['users'][count($_SESSION['users']) - 1]['id'] + 1,
        "data_Naixament" => $_POST['date'],
        "username" => $_POST['username'],
        "password" => $_POST['password'],
        "dataCreat" => $data_creacio,
        "dataModificat" => "",
        "admin" => false,
        "carro" => array(),
        "historial_compres" => array()


    );

    $_SESSION['users'][] = $user;
    header('Location: ./signin.php');
    die();
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <?php
    include_once('templates/nav.php')
    ?>
    <main>
        <form class="col-5 m-4 p-4 bg-light mx-auto" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" name="date" id="date" aria-describedby="helpId" placeholder="">
            </div>
            <a href="login.php">Login</a>
            <button name="signup" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>