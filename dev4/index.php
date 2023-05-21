<body class="b">


    <link rel="stylesheet" href="style.css">

    <fieldset>
        <legend>LOGIN</legend>
        <form action="" method="POST">
            <input type="text" name="nom"><br>
            <input type="password" name="mdp"><br>
            <input type="submit" name="sub">
        </form>
    </fieldset>

    <?php

    if (isset($_POST['sub'])) {
        session_start();
        if (!empty($_POST['nom']) && !empty($_POST['mdp'])) {
            $f = fopen("aut.txt", 'r');

            $fo = fgets($f);
            $e = explode("|", $fo);
            if ($_POST['nom'] == $e[0] and $_POST['mdp'] == $e[1]) {

                $_SESSION['name'] = $_POST['nom'];
                header("location:page2.php");
                exit();
            } else {
                echo "verifie votre nom ou mdp";
            }
            fclose($f);
        } elseif (empty($_POST['nom']) && empty($_POST['mdp'])) {
            echo "entre votre information";
        }
    }

    ?>
</body>