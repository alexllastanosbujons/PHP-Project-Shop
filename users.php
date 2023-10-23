<?php
if (!isset($_SESSION)) session_start();
if (isset($_SESSION['user_logged'])) {
    if (!$_SESSION['user_logged']['admin']) {
        header("Location: ./403.php");
        die();
    }
} else {
    header("Location: ./403.php");
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
    <header>
        <?php
        include_once('templates/nav.php')
        ?>
    </header>

    <div class="container mt-5">
        <h2 class="text-center">Usuaris</h2>
        <div class="col-9 mx-auto">
            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th class="text-center">Nom</th>
                        <th class="text-center">Contrasenya</th>
                        <th class="text-center">Eliminar</th>
                        <th class="text-center">Cambiar Estat Admin</th>
                        <th class="text-center">Admin</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($_SESSION['users'] as $user) {
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $user['username'] ?></td>
                            <td class="text-center"><?php echo $user['password'] ?></td>
                            <td class="text-center">
                                <?php
                                if ($user['admin'] == false) {
                                ?>
                                    <a name="user_id" class="btn btn-danger" href="./deleteUser.php?user=<?php echo $user['username'] ?>">Eliminar</a>

                                <?php
                                } ?>
                            </td>
                            <td class="text-center">
                                <?php
                                if ($user['username'] != "admin") {
                                ?>

                                    <a name="user_id" class="btn btn-warning" href="./cambiarEstatAdmin.php?user=<?php echo $user['username'] ?>">Cambiar Estat Admin</a>

                                <?php

                                } ?>
                            </td>
                            <td class="text-center">

                                <?php
                                if ($user['admin'] == true) {
                                ?>
                                    <i class="bi bi-check2"></i>
                                <?php

                                } else {
                                ?>
                                    <i class="bi bi-ban"></i>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php

                    }
                    ?>
                </tbody>
                <?php
                if (isset($_SESSION['flash'])) {
                ?>
                    <small class="text-danger"><?php echo $_SESSION['flash'] ?></small>

                <?php
                    unset($_SESSION['flash']);
                }
                ?>
            </table>
        </div>
    </div>


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