<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Controllo del login</title>
</head>
<body>

    <?php
    $flag = false;

    $password = $_POST["password"];


    if(mb_strlen($password) < 8){
        $flag = true;
    }
    if(!preg_match('/[A-Z]/', $password)){
        $flag = true;
    }
    if(!preg_match('/[0-9]/', $password)){
        $flag = true;
    }
    echo '<br>';

    if($flag){
        echo 'ACCESSO NEGATO';
    }

    if (!$flag) {
        header("areaPrivata.php");
        exit;
    }

    echo '<br>';

    echo '<a href = "login.php"> Torna indietro </a>';
    ?>

</body>
</html>