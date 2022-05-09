<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank musów</title>
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
        <div id="counter">
            <h1>
                <?php 
                    if(!isset($_SESSION["username"]))
                    {
                        echo " ";
                    }
                    else
                    {
                        echo "Zalogowano jako " . $_SESSION["username"];
                    }
                ?>
            </h1>
            <table>
                <tr>
                    <td>
                        <div id="counter_image">
                            <img src="images/mus.png">
                        </div>
                    </td>
                    <td>
                        <div id="counter_text">
                            <h1>Ilość musów: <?php
                                if(!isset($_SESSION["mus_count"]))
                                {
                                    echo "Zaloguj się, aby sprawdzić stan musów!";
                                }
                                else
                                {
                                    echo $_SESSION["mus_count"];    
                                }
                            ?></h1>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>