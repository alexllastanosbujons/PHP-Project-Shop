<?php
if (!isset($_SESSION)) session_start();
include_once('fun/fun.php');
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
    <main>
        <?php echo $_SESSION['user_logged']['username'];
        echo var_dump($_SESSION['users']);
        echo var_dump($_SESSION['products']);
        ?>
    </main>
    <div class="container col-4 mt-5 d-flex">
        <?php foreach ($_SESSION['products'] as $product) { ?>
            <div class="row">
                <div class="col-md-6">
                    <img src=<?php echo $product['img'] ?> alt="Producto" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h6><?php echo $product['name'] ?></h6>
                    <small><?php echo $product['description'] ?></small>
                    <h6>Preu: <?php echo $product['price'] ?>€</h6>
                    <small>Estoc: <?php echo $product['stock'] ?></small>

                    <button class="btn btn-primary">Afegir al Carro</button>


                </div>
            </div>
        <?php } ?>
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