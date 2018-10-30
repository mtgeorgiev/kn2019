<?php
    require_once "libs/User.php";

    $user = new User('Харалампи Евлогиев', '3143');
    $user->setEmail('hari.evlogiev@abv.bg');
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Профилна страница</title>
    </head>
    <body>
        <form method="POST" action="register.php">
            <div>
                <label for="username">Потребителско име</label>
                <input type="text"
                       id="username"
                       name="username"
                       value="<?= $user->getUsername() ?>"
                       disabled />
            </div>
            
            <div>
                <label for="email">Имейл</label>
                <input type="email"
                       id="email"
                       name="email"
                       value="<?= $user->getEmail() ?>" />
            </div>

            <label for="female">Жена</label>
            <input type="radio"
                       id="female"
                       name="gender"
                       value="F"/>
                       
           <label for="male">Мъж</label>
           <input type="radio"
                   id="male"
                   name="gender"
                   value="M"/>
                   
           
            <label for="female">Жена</label>
            <input type="checkbox"
                       id="female"
                       name="genderC[]"
                       value="F"/>
                       
           <label for="male">Мъж</label>
           <input type="checkbox"
                   id="male"
                   name="genderC[]"
                   value="M"/>
            <div>
                <input type="submit" value="Регистрирай ме"/>
            </div>
            
            <textarea name="text"></textarea>
            
            <select name="dropdown">
                <option value="1" <?= false ? 'selected': ''?>>123</option>
                <option value="2" <?= true ? 'selected': ''?>>234</option>
                <option value="3">345</option>
            </select>
        </form>
    </body>
</html>
