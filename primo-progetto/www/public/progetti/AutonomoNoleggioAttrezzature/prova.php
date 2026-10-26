<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Prova</title>
</head>
<body>
<h1>Prova stringa</h1> <br> <br>
    <?php
    echo "Prova del Get";
    if(!empty($_GET["stringa"])){
        echo '<p>Stringa non e vuota</p>';
    }
    if(empty($_GET["stringa"])){
        echo '<p>Stringa vuota</p>';
    }
    if($_GET["stringa"]=="piena"){
        echo '<p>Stringa piena</p>';
    }
    ?>

</body>
</html>


