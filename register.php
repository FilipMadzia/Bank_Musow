<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank musów - rejestracja</title>
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
        <h3>Zarejestruj się w Banku Musów</h3>
        <form action="register_handler.php" method="post">
            <table id="form_table">
                <tr>
                    <td><label for="r_username">Nazwa użytkownika: </label></td>
                    <td><input type="text" name="r_username" id="r_username" placeholder="Stwórz nazwę użytkownika"><br></td>
                </tr>
                <tr>
                    <td><label for="r_password">Hasło:</label></td>
                    <td><input type="text" name="r_password" id="r_password" placeholder="Stwórz silne hasło"></td>
                </tr>
            </table>

            <input type="submit" value="Zarejestruj">
        </form>
    </div>
</body>
</html>