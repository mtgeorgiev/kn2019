<?php

    require_once "libs/User.php";
    
    var_dump(User::getUserById(2));
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Регистрация</title>
    </head>
    <body>
        <form method="POST" action="register.php">
            <div>
                <label for="username">Въведете потребителско име</label>
                <input type="text" id="username" name="username" required />
            </div>
            
            <div>
                <label for="email">Въведете имейл</label>
                <input type="email" id="email" name="email" required />
            </div>
            
            <div>
                <label for="password">Въведете парола</label>
                <input type="password" id="password" name="password" required />
            </div>
            <br/>
            <input type="submit" value="Регистрирай ме"/>
        </form>
    </body>
</html>
