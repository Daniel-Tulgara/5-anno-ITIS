<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Tabelline</title>
</head>

<h1>
    <?php
    $n = $_GET['numero'];
    echo "Tabellina del " . $n;
    ?>
</h1>
<body>

<table border = "25">

    <?php


    for ($i = 1; $i <= 10 ; $i++) {
        echo "<tr>";
        echo "<th>";
        echo $n * $i;
        echo"</th>";
        echo"</tr>";

    }

    ?>

</table>
<br>
<a href = "TabellaPitagorica.php">Torna alla tabella pitagorica</a>
</body>
</html>