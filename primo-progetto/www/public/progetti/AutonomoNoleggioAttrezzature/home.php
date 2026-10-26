


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Attrezzatura sportiva</title>
</head>
<body>
<?php
$errore = false;
if(isset($_POST['invio'])){
    if(!empty($_POST['nome']) && !empty($_POST['cognome']) && !empty($_POST['attrezzatura']) && !empty($_POST['qta'])){
        ?>

        <table border="1">
            <tr>
                <td>Nome</td>
                <td><?php
                    echo $_POST['nome'];
                    ?> </td>
            </tr>
            <tr>
                <td>Cognome</td>
                <td><?php
                    echo $_POST['cognome'];
                    ?> </td>
            </tr>
            <tr>
                <td>Attrezzatura</td>
                <td><?php
                    echo $_POST['attrezzatura'];
                    ?> </td>
            </tr>
            <tr>
                <td>Quantita'</td>
                <td><?php
                    echo $_POST['qta'];
                    ?> </td>
            </tr>

            <tr>
                <td>Costo unitario</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Costo totale</td>
                <td><?php
                    echo $_POST['qta']*10;
                    ?> </td>
            </tr>
        </table>



        <?php
    } else { $errore = true;
    }
}

if($errore || !isset($_POST['invio'])){
    ?>


<h1>Noleggio attrezzatura sportiva</h1>

<form action="" method="post">

    Nome: <input type="text" name="nome"> <br> <br>
    Cognome: <input type="text" name="cognome"> <br> <br>


    Attrezzatura:
    <select name="attrezzatura">
        <option value="" disabled selected></option>
        <option value="macchinario">Macchinario palestra</option>
        <option value="sbarra">Sbarra trazioni</option>
        <option value="parallele">Parallele</option>
    </select> <br> <br>

    Quantita':
    <input type="radio" name="qta" value="1"> 1
    <input type="radio" name="qta" value="2"> 2
    <input type="radio" name="qta" value="3"> 3
    <br> <br>
    <?php
    if($errore){
        echo '<p>Inserisci tutti i campi </p>';
    }
    ?>

    <input type="submit" name="invio" value="invia form">
</form>

<?php
}
?>
<br> <br>
<form action="ricevi.php" method="POST">
    Email: <input type="email" name="email"> <br> <br>
    Sport: <select name="sport" >
        <option value="sci">Sci</option>
        <option value="snowboard">Snowboard</option>
        <option value="tennis">Tennis</option>
    </select> <br> <br>

    <input type="submit" name="invia" value="invia">
</form>
</body>
</html>


