<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>pizzeria </title>
</head>
<body>
<h1>Prenota da myPizza</h1>

<form action="" method="post">
    tipo di sistemazione:
    <select name="sistemazione" >
        <option value=""></option>
        <option value="tavolo">tavolo</option>
        <option value="asporto">asporto</option>
        <option value="domicilio">domicilio</option>
    </select> <br>

    pizza:
    <select name="pizza">
        <option value=""></option>
        <option value="margherita">margherita</option>
        <option value="piccante">piccante</option>
    </select> <br> <br>

    seleziona eventuali aggiunte: <br>
    <input type="checkbox" name="aggiunta1" value="prosciutto">prosciutto <br>
    <input type="checkbox" name="aggiunta2" value="ricotta">ricotta <br>
    <input type="checkbox" name="aggiunta3" value="salsiccia">salsiccia <br> <br>

    seleziona tipo di impasto: <br>
    <input type="radio" name="impasto" value="senza-glutine">senza glutine <br>
    <input type="radio" name="impasto" value="normale">normale <br> <br>


    <input type="submit" value="prenota" name="invio">
</form>

<?php
if(isset($_POST["invio"])){
    if(empty($_POST['sistemazione']) || empty($_POST['pizza']) || empty($_POST['impasto'])){
        echo '<p>inserisci tutti i campi </p>';
    } else{
        $agg1 = "";
        $agg2 = "";
        $agg3 = "";

        if(isset($_POST['aggiunta1'])){
            $agg1 = $_POST['aggiunta1'];
        }
        if(isset($_POST['aggiunta2'])){
            $agg2 = $_POST['aggiunta2'];
        }
        if(isset($_POST['aggiunta3'])){
            $agg3 = $_POST['aggiunta3'];
        }
        echo 'riepilo ordine: ' . $_POST['sistemazione'] .' ' . $_POST['pizza'] . ' '. $_POST['impasto'].' ' . $agg1 .' '. $agg2 .' '. $agg3;
    }
}

?>
</body>
</html>