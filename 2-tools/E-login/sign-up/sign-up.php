<!--
<?php
    echo "<br>Ahoj php,<br> toto je log-in";
?>
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="../../B-media/real-icon3.png" type="image/x-icon" />
    <link rel="stylesheet" href="styles/sign-up.css">

    <title>sign-up</title>
</head>
<body>
    <div id="content">
        <div id="log-in">
            <div id="log-in-header">
                <div id="log-in-title">Sign-up</div>
                <a href="../../../index.php"><img src="../../B-media/logo-real.svg" 
                    alt="hopa" id="logo"></a>
            </div>
            <form action="" method="" id="log-in-formular">
                <input type="email" id="email" name="email" 
                placeholder="E-mail" required>

                <input type="password" id="password" name="password" 
                placeholder="Heslo" required>

                <input type="password" id="co-password" name="co-password" 
                placeholder="Potvrd heslo" required>

                <input type="text" id="fname" name="fname" 
                placeholder="Meno" required>

                <input type="text" id="lname" name="lname" 
                placeholder="Priezvisko" required>

                <select id="gender" name="gender">
                    <option value="0">Vyber pohlavie</option>
                    <?php foreach($sizes as $size): ?>
                        <option value="<?= $size["id"] ?>"
                            <?php if($_POST["size"] == $size["id"]): ?>
                                selected
                            <?php endif ?>
                        >
                            <?= $size["name"] ?>
                        </option>
                    <?php endforeach ?>
                </select>

                <input type="number" id="age" name="age" 
                placeholder="Vek" required>

                <input type="number" id="height" name="height" 
                placeholder="Vyska" required>

                <input type="number" id="weight" name="weight" 
                placeholder="Vaha" required>

            </form>
            <div id="log-in-footer">
                <input type="submit" id="bt-login" name="submit" 
                value="Register" required>
                <a href="../log-in/log-in.php" id="new-account">Already have an account</a>
            </div>
        </div>
    </div>

    <div id="log-in-header"></div>
</body>
</html>