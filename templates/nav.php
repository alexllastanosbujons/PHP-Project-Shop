<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<nav class="d-flex justify-content-between p-3 bg-primary text-white">
    <div class="left">
        <i class="bi bi-emoji-dizzy-fill">Botiga Tennis Taula</i>
    </div>
    <div class="right">
        <?php
        echo '<a class=" text-decoration-none text-white" href="/home.php">Home</a>';

        if (isset($_SESSION['user_logged'])) {
            echo '<a class="text-decoration-none p-3 text-white">' . $_SESSION['user_logged']['username'] . '</a>';
            if ($_SESSION['user_logged']['admin']) {
                echo '<a class="p-3 text-decoration-none text-white" href="/users.php">Usuaris</a>';
            }
            echo '<a class="text-decoration-none p-3 text-white"  href="/signout.php">Sign Out</a>';
        } else {
            echo '<a class="text-decoration-none p-3 text-white" href="/signup.php">Sign Up</a>';
            echo '<a class="text-decoration-none text-white" href="/signin.php">Sign In</a> ';
            echo '<a class="text-decoration-none text-white" href="/resetDades.php">Reset Dades</a> ';
        }


        ?>


    </div>
</nav>