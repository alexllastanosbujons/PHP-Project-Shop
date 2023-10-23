<?php
if (!isset($_SESSION)) session_start();
include_once('fun/fun.php');
$correct_pass = null;
if (isset($_POST['sub_login'])) {
    $result = login($_POST['username'], $_POST['password']);
    if (is_null($result)) {
        $correct_pass = false;
    } else {
        $_SESSION['user_logged'] = $result;
        $correct_pass = true;
        header('Location: ./home.php');
        die();
    }
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
                <small id="helpId" class="form-text text-muted"></small>
            </div>
            <?php  //if(is_null($result)) {echo "Password Incorrecte";}
            ?>
            <button name="sub_login" type="submit" class="btn btn-primary">Submit</button>
            <p class="mb-3"></p>
            <?php
            if (!is_null($correct_pass)) {

                if (!$correct_pass) {
                    echo "<small class='text-danger'>Credencials Incorrectes</small>";
                }
            }
            ?>

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