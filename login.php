<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank musów - login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- Nagłowek strony -->
    <?php include "header.html"; ?>

    <!-- Pasek nawigacji -->
    <?php include "nav.html"; ?>

    <!-- Kontent -->
    <div class="main" id="content">
        <h3>Zaloguj się na swoje internetowe konto bankowe</h3>
        <form action="login_handler.php" method="post">
            <table id="form_table">
                <tr>
                    <td><label for="username">Nazwa użytkownika: </label></td>
                    <td><input type="text" name="username" id="username" placeholder="Wpisz nazwę użytkownika"><br></td>
                </tr>
                <tr>
                    <td><label for="password">Hasło:</label></td>
                    <td><input type="text" name="password" id="password" placeholder="Wpisz hasło"></td>
                </tr>
            </table>

            <input type="submit" value="Zaloguj">
        </form>

        <h6>Nie masz jeszcze konta? <a href="register.php" target="_self"><b>Kliknij aby się zarejestrować</b></a></h6>
    </div>
</body>
</html>