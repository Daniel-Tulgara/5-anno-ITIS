<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>parcheggio</title>
</head>
<body>
<h1>Prenotazione parcheggio</h1>
<p>Veicolo selezionato:<?php
    echo $_GET['scelta'] ?? 'nessuno';
    ?> </p> <br>

<?php
$errore = false;
if(isset($_POST["invio"])){
    if(!empty($_POST['nome']) && !empty($_POST['ore'])){
?>

    <h1>Riepilogo della prenotazione</h1>

    <table border="1">
        <tr>
            <td>Nome cliente</td>
            <td><?php
                echo $_POST['nome'];
                ?>  </td>
        </tr>
        <tr>
            <td>Tipo di veicolo</td>
            <td><?php
                echo $_GET['scelta'];
                ?> </td>
        </tr>
        <tr>
            <td>Numero di ore</td>
            <td><?php
                echo $_POST['ore'];
                ?> </td>
        </tr>
        <tr>
            <td>Costo orario</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Costo totale</td>
            <td><?php
                echo $_POST['ore']*2;
                ?> </td>
        </tr>
    </table>



<?php
    } else {
        $errore = true;
    }
}
if($errore || !isset($_POST["invio"])){
?>
<form action="" method="POST">

    Nome: <input type="text" name="nome"><br> <br>
    Numero di ore:
    <select name="ore">
        <option value="" disabled selected></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select> <br> <br>

    <?php
    if($errore) {
        echo '<p> inserisci tutti i valori </p>';
    }
    ?>

    <input type="submit" value="Calcola prezzo" name="invio">
</form>

<?php
}
?>
<br>
<a href="home.php">torna alla scelta del veicolo</a>
</body>
</html>
