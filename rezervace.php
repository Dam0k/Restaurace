<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurace";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Rezervace</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
</head>

<body>
    <ul>
        <li><a href="index.html">O nás</a></li>
        <li><a href="listek.html">Jídelní lístek</a></li>
        <li><a href="rezervace.html">Rezervace</a></li>
        <li><a href="objednavka.html">Objednat jídlo</a></li>
        <li><a href="kontakt.html">Kontakt</a></li>
    </ul>
    <h1>Rezervace stolu</h1>
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <label for="datetime-local">Datum a čas:</label>
        <input type="datetime-local" name="datetime" required><br>
        <input type="number" placeholder="Počet osob" name="personcount" required><br>
        <input type="text" placeholder="Jméno" name="name" required><br>
        <input type="email" placeholder="E-mail" name="email" required><br>
        <input type="number" placeholder="Telefon" name="phone" required><br>
        <input type="text" placeholder="Poznámka - nepovinná" name="note"><br>
        <input type="submit" value="Rezervovat" name="submit"><br>
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $datetime = $_POST['datetime'];
        $personcount = $_POST['personcount'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $note = $_POST['note'];
    
        $sql = "INSERT INTO rezervace (datetime, personcount, name, email, phone, note)
        VALUES ('$datetime', '$personcount', '$name', '$email', '$phone', '$note')";
    
        if ($conn->query($sql) === TRUE) {
            echo "Rezervace byla zaznamenána.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }    
    ?>

</body>

</html>