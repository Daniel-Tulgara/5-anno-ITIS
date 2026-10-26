<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Tabella pitagorica</title>
</head>
<body>

<h1>Tabella pitagorica</h1>

<table border="1">

    <?php

    echo "<tr>";
    echo "<th>x</th>";

    for ($i = 0; $i <= 10; $i++) {

        echo "<th>";
        echo $i;
        echo "</th>";

    }
    echo "</tr>";

    for ($j = 0; $j <= 10; $j++) {
        echo "<tr>";
        echo "<th>";
        echo $j;
        echo "</th>";
        for ($i = 0; $i <= 10 ; $i++) {
            echo "<td>";
            echo $i*$j;

        }
        echo "</tr>";

    }

    ?>

</table>

<br>


<a href = "tabelline.php">Vai alle tabelline</a>

</body>
</html>
