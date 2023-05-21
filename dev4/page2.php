<body class="b1">
    <link rel="stylesheet" href="style.css">

    <?php
    session_start();
    echo "BONJOUR " . $_SESSION['name'] . " choisir votre marques " . "<br></br>";
    ?>

    <form action="" method="POST">
        <label for="marque">Choisir une marque</label>
        <select name="marque" id="marque">
            <optgroup label="Marques">
                <option value="adidas">ADIDAS</a></option>
                <option value="nike">NIKE</option>
                <option value="zara">ZARA</option>
                <option value="puma">PUMA</option>
                <option value="mango">MANGO</option>
            </optgroup>
        </select><br><br>
        <input type="submit" name="choi" value="choisir">


    </form>
    <?PHP
    if (isset($_POST['choi'])) {

        if (!empty($_POST['marque'])) {
            $_SESSION['marque'] = $_POST['marque'];
            header("location:page1.php");
            exit();
        } elseif (empty($_POST['marque'])) {
            echo "choisir un marque";
        }
    }
    ?>
</body>