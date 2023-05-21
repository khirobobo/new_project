<?PHP
session_start();
if (isset($_SESSION['marque']) && isset($_SESSION['name'])) {

    $url = "http://www." . $_SESSION['marque'] . ".com";
    echo "votre lien mr " . $_SESSION['name'] . "<br></br>";
    echo "<a href=" . $url . ">$url</a>";
    session_destroy();
} else {
    header("location:index.php");
    exit();
}
