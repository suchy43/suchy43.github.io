<?php
require_once('db_config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Contact</title>
    <link rel="stylesheet" href="style.css">
    <!-- Dodaj dodatkowe linki do arkuszy stylów, jeśli to konieczne -->
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        try {
            $stmt = $pdo->prepare("INSERT INTO kontakt (imie_nazwisko, email, wiadomosc) VALUES (?, ?, ?)");
            $stmt->execute([$name, $email, $message]);
            echo "<p>Dziękujemy, $name! Otrzymaliśmy Twoją wiadomość.</p>";
        } catch (PDOException $e) {
            echo "Błąd zapisu do bazy danych: " . $e->getMessage();
        }
    } else {
        header("Location: index.php");
    }
    ?>

    <div class="center-wrapper">
        <a href="index.php"><button class="center-button">Powrót do strony głównej</button></a>
    </div>
</body>
</html>
