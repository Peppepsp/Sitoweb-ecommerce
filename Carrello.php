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
                <li><a class="active" href="Carrello.php">Carrello</a></li>
                <li><a href="Index.php">Esci</a></li>
            </ul>
        </nav>
        <br>
        <br>
        <div id="divsfondo" style="height: 100%;">
            <center>
                <img src="img/Logo Esteso.png" alt="Logo">
                <?php
                    session_start();
                    $Nome = $_SESSION['Nome'];
                    $MetodoPagamento = $_SESSION['MetodoPagamento'];
                    $ID_Utente = $_SESSION['IDUtente'];
                    echo "<h2>". "Benvenuto/a " . $Nome . " Questo è il tuo carrello" . "</h2>"; 
                    echo "<h3>". "Hai scelto di pagare con " . $MetodoPagamento . "</h3>";?>
                <br>
            </center>
                <?php 
                    $ID_Utente = $_SESSION['IDUtente'];
                    $conn = mysqli_connect("localhost", "root", "");
                    if (! $conn){
                        die('Errore durante la connessione: ' . mysqli_errno($conn));}
                    $db1 = mysqli_select_db($conn,'logicsystem');
                    if (!$db1){
                        die('Accesso al database non riuscito: ' . mysqli_errno($conn));}
                    if(isset($_POST['Carrello1'])){ 
                        $ID_Prodotto = 1;
                    }elseif(isset($_POST['Carrello2'])){
                        $ID_Prodotto = 2;
                    }elseif(isset($_POST['Carrello3'])){
                        $ID_Prodotto = 3;
                    }elseif(isset($_POST['Carrello4'])){
                        $ID_Prodotto = 4;
                    }elseif(isset($_POST['Carrello5'])){
                        $ID_Prodotto = 5;
                    }elseif(isset($_POST['Carrello6'])){
                        $ID_Prodotto = 6;
                    }elseif(isset($_POST['Carrello7'])){
                        $ID_Prodotto = 7;
                    }elseif(isset($_POST['Carrello8'])){
                        $ID_Prodotto = 8;
                    } else{
                        $ID_Prodotto = NULL;
                    }
                    
                    $strSQL = "SELECT * From Ordini WHERE ID_Utente = ' $ID_Utente'";
                    $tabella = mysqli_query($conn, $strSQL);
                    $ID_Carrello = 0;
                    $Comprato = 0;
                    while($row = mysqli_fetch_array($tabella)){
                        if($row['ID_Carrello'] > $ID_Carrello){
                            $ID_Carrello = $row['ID_Carrello'];
                            if($row['Comprato'] != 0){
                                $Comprato = 1;
                                }else{
                                    $Comprato = 0;
                                }
                            }
                        }
                        if(isset($_POST['Compra'])){ 
                            $strSQL = "Update Ordini Set Comprato = 1 Where ID_Utente = '$ID_Utente' AND ID_Carrello = '$ID_Carrello'";
                            $tabella = mysqli_query($conn, $strSQL);
                            $ID_Carrello += 1;
                            }
                        if($Comprato != 0){
                            $ID_Carrello += 1;
                        }
                        if($ID_Carrello == 0){
                            $ID_Carrello = 1;
                        }

                    if($ID_Prodotto != NULL){
                        $MetodoP = $_SESSION['MetodoPagamento'];
                        $Quanti = $_POST['Quantita'];
                        $strSQL = "SELECT * From Prodotti WHERE ID_Prodotto = '$ID_Prodotto'";
                        $tabella = mysqli_query($conn, $strSQL);
                        if($row1 = mysqli_fetch_array($tabella)){
                            if($row1['Disponibile'] > 0){
                                $strSQL = "UPDATE Prodotti SET Disponibile = Disponibile - '$Quanti' WHERE ID_Prodotto = '$ID_Prodotto'";
                                $tabella = mysqli_query($conn, $strSQL);
                                $PrezzoTotale = $row1['Prezzo'] * $Quanti;
                                $strSQl = "Select * From Ordini Where ID_Utente = '$ID_Utente' AND ID_Carrello = '$ID_Carrello' AND ID_Prodotto = '$ID_Prodotto'";
                                $tabella = mysqli_query($conn, $strSQl);
                                if($row = mysqli_fetch_array($tabella)){
                                $PrezzoTotale2 = ($row1['Prezzo'] * $Quanti);
                                $strSQL = "UPDATE Ordini SET Quantita = Quantita + '$Quanti', PrezzoTotale = PrezzoTotale + '$PrezzoTotale2'  WHERE ID_Utente = '$ID_Utente' AND ID_Carrello = '$ID_Carrello' AND ID_Prodotto = '$ID_Prodotto'";
                                }
                                else{
                                $strSQL = "INSERT INTO Ordini(MetodoPag, Quantita, PrezzoTotale,ID_Utente,ID_Prodotto, ID_Carrello, Comprato) VALUES ('$MetodoP','$Quanti','$PrezzoTotale','$ID_Utente', '$ID_Prodotto', '$ID_Carrello', '0')";}
                                if (mysqli_query($conn, $strSQL)) {
                                echo "<center><h3>Ordine inserito</h3></center>" ;}
                                else {
                                    echo "Errore nell'inserimento dell'Ordine: " . mysqli_errno($conn);}
                            }
                            else{
                            echo "<center><h2>". "Il prodotto " . $row['Modello'] . " è terminato</h2></center>";
                            }
                        }
                    }
                    $strSQL = "SELECT * From Prodotti Right join Ordini on Prodotti.ID_Prodotto = Ordini.ID_Prodotto WHERE Ordini.ID_Utente = '$ID_Utente' and Ordini.ID_Carrello = '$ID_Carrello';";
                    $tabella = mysqli_query($conn, $strSQL);
                    $PrezzoFinale = 0;
                    echo "<center><table border='1'> <thead> <tr><th>Marca</th><th>Modello</th><th>Quantità</th><th>Prezzo</th><th>Prezzo Totale</th></tr></thead>";
                    while($row = mysqli_fetch_array($tabella)){
                        $Marca = $row['Marca'];
                        $Modello = $row['Modello'];
                        $Quantita = $row['Quantita'];
                        $Prezzo = $row['Prezzo'];
                        $PrezzoTotale = $row['PrezzoTotale'];
                        $PrezzoFinale += $PrezzoTotale;
                        echo "<tbody><tr><td>". $Marca . "</td><td>". $Modello . "</td><td>". $Quantita . "</td><td>". $Prezzo . "</td><td>" . $PrezzoTotale . "</td> </tr>";
                    } echo "<tr><td></td><td></td><td></td><td></td><th>Prezzo Finale</th></tr><tr><td></td><td></td><td></td><td></td><td> ". $PrezzoFinale ." </td></tr></tbody></table></center>";
                    
                    mysqli_close($conn);
                ?>
                <form action="" method="post">
                    <center><input type="submit" name="Compra" value="Compra"></center>
                </form>
        </div>
    </body>
</html>