<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Logic System Shop</title>
    </head>
    <body>
        <nav>
            <a href="Index.php"> <img src="img/Logo.png" alt="Logo"></a>
            <ul>
                <li><a href="Shop.php">Shop</a></li>
                <li><a href="Carrello.php">Carrello</a></li>
                <li><a href="Index.php">Esci</a></li>
            </ul>
        </nav>
        <br>
        <br>
        <div id="divsfondo">
            <center>
            <img src="img/Logo Esteso.png" alt="Logo">
            </center>
            <?php
                session_start();
                $conn = mysqli_connect("localhost", "root", "");
                if (! $conn){
                    die('Errore durante la connessione: ' . mysqli_errno($conn));}
                $db1 = mysqli_select_db($conn,'logicsystem');
                if (!$db1){
                    die('Accesso al database non riuscito: ' . mysqli_errno($conn));}
                if(isset($_POST['Acquista1'])){ 
                    $ID_Prodotto = 1;
                }elseif(isset($_POST['Acquista2'])){
                    $ID_Prodotto = 2;
                }elseif(isset($_POST['Acquista3'])){
                    $ID_Prodotto = 3;
                }elseif(isset($_POST['Acquista4'])){
                    $ID_Prodotto = 4;
                }elseif(isset($_POST['Acquista5'])){
                    $ID_Prodotto = 5;
                }elseif(isset($_POST['Acquista6'])){
                    $ID_Prodotto = 6;
                }elseif(isset($_POST['Acquista7'])){
                    $ID_Prodotto = 7;
                }elseif(isset($_POST['Acquista8'])){
                    $ID_Prodotto = 8;
                } else{}
                $ID_Utente = $_SESSION['IDUtente'];
                $MetodoP = $_SESSION['MetodoPagamento'];
                $Quanti = $_POST['Quantita'];
                $strSQL = "SELECT * From Prodotti WHERE ID_Prodotto = '$ID_Prodotto'";
                $tabella = mysqli_query($conn, $strSQL);
                if($row = mysqli_fetch_array($tabella)){
                    if($row['Disponibile'] > 0){
                        $strSQL = "UPDATE Prodotti SET Disponibile = Disponibile - '$Quanti' WHERE ID_Prodotto = '$ID_Prodotto'";
                        $tabella = mysqli_query($conn, $strSQL);
                        $PrezzoTotale = $row['Prezzo'] * $Quanti;
                        echo "<center><h2>". "Hai acquistato " . $Quanti . " ". $row['Modello'] . "</h2></center>";
                        echo "<center><h2>". "Il tuo acquisto costa " . $PrezzoTotale . "</h2></center>";
                        echo "<center><h2>". "Hai scelto di pagare con " . $MetodoP . "</h2></center>";
                        $strSQL = "INSERT INTO Ordini(MetodoPag, Quantita, PrezzoTotale,ID_Carrello,Comprato,ID_Utente,ID_Prodotto) VALUES ('$MetodoP','$Quanti','$PrezzoTotale','0','1','$ID_Utente', '$ID_Prodotto')";
                        if (mysqli_query($conn, $strSQL)) {
                            echo "<center><h3>Ordine inserito</h3></center>" ;}
                        else {
                            echo "Errore nell'inserimento dell' ordine: " . mysqli_errno($conn);} 
                    }
                    else{
                        echo "<center><h2>". "Il prodotto " . $row['Modello'] . " è terminato</h2></center>";
                    }
                }
                mysqli_close($conn);
            ?>
        </div>

    </body>
</html>