<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kontakt</title>
</head>
<body>
    <header>
        <h1>Skontaktuj się z nami</h1>
        <p>Chętnie odpowiemy na Twoje pytania i omówimy szczegóły dotyczące zamówienia.</p>
    </header>

    <section>
        <h2>Formularz kontaktowy</h2>
        <form action="process_kontakt.php" method="post">
            <label for="name">Imię i nazwisko:</label>
            <input type="text" name="name" required>

            <label for="email">Adres e-mail:</label>
            <input type="email" name="email" required>

            <label for="message">Wiadomość:</label>
            <textarea name="message" rows="5" required></textarea>

            <button type="submit">Wyślij</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Tworzenie Stron Internetowych</p>
    </footer>
</body>
</html>
