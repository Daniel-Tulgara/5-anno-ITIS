<?php
echo 'Nome:'. $_POST["name"];
echo '<br>';
echo '<br>';

echo 'Cognome: '. $_POST["cognome"];
echo '<br>';
echo '<br>';

echo 'Email: '. $_POST["email"];
echo '<br>';
echo '<br>';

echo 'Lingua: '. $_POST["lingua"];
echo '<br>';
echo '<br>';

echo 'Livello: '. $_POST["livello"];
echo '<br>';
echo '<br>';

echo 'Orario: ' . '<br>';
if(isset($_POST["orarioM"])){
    echo $_POST["orarioM"] . '<br>';
}
if(isset($_POST["orarioP"])){
    echo $_POST["orarioP"] . '<br>';
}
if(isset($_POST["orarioS"])){
    echo $_POST["orarioS"] . '<br>';
}
echo '<br>';

echo 'Richieste: '. $_POST["richieste"];
echo '<br>';
echo'<br>';

echo '<a href = "corsoDiLingua.php">Torna al form</a>'

?><br>