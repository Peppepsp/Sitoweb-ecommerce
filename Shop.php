<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Logic System Shop</title>
    </head>
    <body>
        <nav>
            <a href="Index.php"> <img src="img/Logo.png" alt="Logo"></a>
            <ul>
                <li><a class="active" href="Shop.php">Shop</a></li>
                <li><a href="Carrello.php">Carrello</a></li>
                <li><a href="Index.php">Esci</a></li>
            </ul>
        </nav>
        <br>
        <br>
        <div id="divsfondo" style="height: 165%;">
            <center>
            <img src="img/Logo Esteso.png" alt="Logo">
            <?php
                session_start();
                $Nome = $_SESSION['Nome'];
                echo "<h2>". "Benvenuto/a " . $Nome . "</h2>"; ?>
            <br>
            </center>
            <table>
                <tr>
                    <td>
                    <div style="float:left; padding-left:15px;padding-right:15px;">
                        <img src="img/Prodotto1.png" alt="Prodotto1">
                        <?php $conn = mysqli_connect("localhost", "root", "");
                            if (! $conn){
                                die('Errore durante la connessione: ' . mysqli_errno($conn));}
                            $db1 = mysqli_select_db($conn,'logicsystem');
                            if (!$db1){
                                die('Accesso al database non riuscito: ' . mysqli_errno($conn));}
                                $strSQL = "SELECT * From Prodotti WHERE ID_Prodotto = '1'";
                                $tabella = mysqli_query($conn, $strSQL);
                                while($row = mysqli_fetch_array($tabella)){
                                    if($row['Disponibile'] != 0){
                                        $Marca = $row['Marca'];
                                        $Modello = $row['Modello'];
                                        $Disponibile = $row['Disponibile'];
                                        $Prezzo = $row['Prezzo'];
                                        $_SESSION['Marca1'] = $Marca;
                                        $_SESSION['Modello1'] = $Modello;
                                        $_SESSION['Disponibile1'] = $Disponibile;
                                        $_SESSION['Prezzo1'] = $Prezzo;
                                    }
                                    else{
                                        echo "0 Prodotto Terminato";
                                    }
                                }
                                mysqli_close($conn);
                            ?>
                        <h2><?php echo $_SESSION['Marca1']. " ". $_SESSION['Modello1'] ?></h2>
                        <h2>Prezzo: <?php echo $_SESSION['Prezzo1'] ?> &euro;</h2>
                        <h3>Disponibili: <?php echo $_SESSION['Disponibile1']; ?></h3>
                        <h3>Descrizione: MacBook Pro </h3>
                        <form action="Ordina.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php echo $_SESSION['Disponibile1']?>">
                            <input type="submit" value="Acquista" name="Acquista1">
                        </form>
                        <form action="Carrello.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php echo $_SESSION['Disponibile1']?>">
                            <input type="submit" value="Aggiungi al Carrello" name="Carrello1">
                        </form>
                    </div>
                    </td>
                    <td>
                    <div style="float:left; padding-left:50px; padding-right:15px;">
                        <img src="img/Prodotto2.png" alt="Prodotto2">
                        <?php $conn = mysqli_connect("localhost", "root", "");
                            if (! $conn){
                                die('Errore durante la connessione: ' . mysqli_errno($conn));}
                            $db1 = mysqli_select_db($conn,'logicsystem');
                            if (!$db1){
                                die('Accesso al database non riuscito: ' . mysqli_errno($conn));}
                                $strSQL = "SELECT * From Prodotti WHERE ID_Prodotto = '2'";
                                $tabella = mysqli_query($conn, $strSQL);
                                while($row = mysqli_fetch_array($tabella)){
                                    if($row['Disponibile'] != 0){
                                        $Marca = $row['Marca'];
                                        $Modello = $row['Modello'];
                                        $Disponibile = $row['Disponibile'];
                                        $Prezzo = $row['Prezzo'];
                                        $_SESSION['Marca2'] = $Marca;
                                        $_SESSION['Modello2'] = $Modello;
                                        $_SESSION['Disponibile2'] = $Disponibile;
                                        $_SESSION['Prezzo2'] = $Prezzo;
                                    }
                                    else{
                                        echo "0 Prodotto Terminato";
                                    }
                                }
                                mysqli_close($conn);
                            ?>
                        <h2><?php echo $_SESSION['Marca2']. " ". $_SESSION['Modello2'] ?></h2>
                        <h2>Prezzo: <?php echo $_SESSION['Prezzo2'] ?> &euro; 
                        <h3>Disponibili: <?php echo $_SESSION['Disponibile2'] ?></h3>
                        <h3>Descrizione: PlayStation 5 Pochi Pezzi</h3> 
                        <form action="Ordina.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php  echo $_SESSION['Disponibile2']?>">
                            <input type="submit" value="Acquista" name="Acquista2">
                        </form>
                        <form action="Carrello.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php echo $_SESSION['Disponibile2']?>">
                            <input type="submit" value="Aggiungi al Carrello" name="Carrello2">
                        </form>
                    </div>
                    </td>
                    <td>
                    <div style="float:left; padding-left:15px; padding-right:50px;">
                        <img src="img/Prodotto3.png" alt="Prodotto3">
                        <?php $conn = mysqli_connect("localhost", "root", "");
                            if (! $conn){
                                die('Errore durante la connessione: ' . mysqli_errno($conn));}
                            $db1 = mysqli_select_db($conn,'logicsystem');
                            if (!$db1){
                                die('Accesso al database non riuscito: ' . mysqli_errno($conn));}
                                $strSQL = "SELECT * From Prodotti WHERE ID_Prodotto = '3'";
                                $tabella = mysqli_query($conn, $strSQL);
                                while($row = mysqli_fetch_array($tabella)){
                                    if($row['Disponibile'] != 0){
                                        $Marca = $row['Marca'];
                                        $Modello = $row['Modello'];
                                        $Disponibile = $row['Disponibile'];
                                        $Prezzo = $row['Prezzo'];
                                        $_SESSION['Marca3'] = $Marca;
                                        $_SESSION['Modello3'] = $Modello;
                                        $_SESSION['Disponibile3'] = $Disponibile;
                                        $_SESSION['Prezzo3'] = $Prezzo;
                                    }
                                    else{
                                        echo "0 Prodotto Terminato";
                                    }
                                }
                                mysqli_close($conn);
                            ?>
                        <h2><?php echo $_SESSION['Marca3']. " ". $_SESSION['Modello3'] ?></h2>
                        <h2>Prezzo: <?php echo  $_SESSION['Prezzo3'] ?> &euro; 
                        <h3>Disponibili: <?php echo $_SESSION['Disponibile3'] ?></h3>
                        <h3>Descrizione: Nokia Millenario</h3> 
                        <form action="Ordina.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php  echo $_SESSION['Disponibile3']?>">
                            <input type="submit" value="Acquista" name="Acquista3">
                        </form>
                        <form action="Carrello.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php echo $_SESSION['Disponibile3']?>">
                            <input type="submit" value="Aggiungi al Carrello" name="Carrello3">
                        </form>
                    </div>
                    </td>
                    <td>
                    <div style="float:leftt; padding-left:15px; padding-right:15px;">
                        <img src="img/Prodotto4.png" alt="Prodotto4">
                        <?php $conn = mysqli_connect("localhost", "root", "");
                            if (! $conn){
                                die('Errore durante la connessione: ' . mysqli_errno($conn));}
                            $db1 = mysqli_select_db($conn,'logicsystem');
                            if (!$db1){
                                die('Accesso al database non riuscito: ' . mysqli_errno($conn));}
                                $strSQL = "SELECT * From Prodotti WHERE ID_Prodotto = '4'";
                                $tabella = mysqli_query($conn, $strSQL);
                                while($row = mysqli_fetch_array($tabella)){
                                    if($row['Disponibile'] != 0){
                                        $Marca = $row['Marca'];
                                        $Modello = $row['Modello'];
                                        $Disponibile = $row['Disponibile'];
                                        $Prezzo = $row['Prezzo'];
                                        $_SESSION['Marca4'] = $Marca;
                                        $_SESSION['Modello4'] = $Modello;
                                        $_SESSION['Disponibile4'] = $Disponibile;
                                        $_SESSION['Prezzo4'] = $Prezzo;
                                    }
                                    else{
                                        echo "0 Prodotto Terminato";
                                    }
                                }
                                mysqli_close($conn);
                            ?>
                        <h2><?php echo $_SESSION['Marca4']. " ". $_SESSION['Modello4'] ?></h2>
                        <h2>Prezzo: <?php echo $_SESSION['Prezzo4'] ?> &euro; 
                        <h3>Disponibili: <?php echo $_SESSION['Disponibile4'] ?></h3>
                        <h3>Descrizione: Nuovo Galaxy</h3> 
                        <form action="Ordina.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php  echo $_SESSION['Disponibile4']?>">
                            <input type="submit" value="Acquista" name="Acquista4">
                        </form>
                        <form action="Carrello.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php echo $_SESSION['Disponibile4']?>">
                            <input type="submit" value="Aggiungi al Carrello" name="Carrello4">
                        </form>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div style="float:left; padding-left:15px;padding-right:15px;">
                        <img src="img/Prodotto5.png" alt="Prodotto5">
                        <?php $conn = mysqli_connect("localhost", "root", "");
                            if (! $conn){
                                die('Errore durante la connessione: ' . mysqli_errno($conn));}
                            $db1 = mysqli_select_db($conn,'logicsystem');
                            if (!$db1){
                                die('Accesso al database non riuscito: ' . mysqli_errno($conn));}
                                $strSQL = "SELECT * From Prodotti WHERE ID_Prodotto = '5'";
                                $tabella = mysqli_query($conn, $strSQL);
                                while($row = mysqli_fetch_array($tabella)){
                                    if($row['Disponibile'] != 0){
                                        $Marca = $row['Marca'];
                                        $Modello = $row['Modello'];
                                        $Disponibile = $row['Disponibile'];
                                        $Prezzo = $row['Prezzo'];
                                        $_SESSION['Marca5'] = $Marca;
                                        $_SESSION['Modello5'] = $Modello;
                                        $_SESSION['Disponibile5'] = $Disponibile;
                                        $_SESSION['Prezzo5'] = $Prezzo;
                                    }
                                    else{
                                        echo "0 Prodotto Terminato";
                                    }
                                }
                                mysqli_close($conn);
                            ?>
                        <h2><?php echo $_SESSION['Marca5']. " ". $_SESSION['Modello5'] ?></h2>
                        <h2>Prezzo: <?php echo $_SESSION['Prezzo5'] ?> &euro;</h2>
                        <h3>Disponibili: <?php echo $_SESSION['Disponibile5']; ?></h3>
                        <h3>Descrizione: Special Edition FindX</h3>
                        <form action="Ordina.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php echo $_SESSION['Disponibile5']?>">
                            <input type="submit" value="Acquista" name="Acquista5">
                        </form>
                        <form action="Carrello.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php echo $_SESSION['Disponibile5']?>">
                            <input type="submit" value="Aggiungi al Carrello" name="Carrello5">
                        </form>
                    </div>
                    </td>
                    <td>
                    <div style="float:left; padding-left:50px; padding-right:15px;">
                        <img src="img/Prodotto6.png" alt="Prodotto6">
                        <?php $conn = mysqli_connect("localhost", "root", "");
                            if (! $conn){
                                die('Errore durante la connessione: ' . mysqli_errno($conn));}
                            $db1 = mysqli_select_db($conn,'logicsystem');
                            if (!$db1){
                                die('Accesso al database non riuscito: ' . mysqli_errno($conn));}
                                $strSQL = "SELECT * From Prodotti WHERE ID_Prodotto = '6'";
                                $tabella = mysqli_query($conn, $strSQL);
                                while($row = mysqli_fetch_array($tabella)){
                                    if($row['Disponibile'] != 0){
                                        $Marca = $row['Marca'];
                                        $Modello = $row['Modello'];
                                        $Disponibile = $row['Disponibile'];
                                        $Prezzo = $row['Prezzo'];
                                        $_SESSION['Marca6'] = $Marca;
                                        $_SESSION['Modello6'] = $Modello;
                                        $_SESSION['Disponibile6'] = $Disponibile;
                                        $_SESSION['Prezzo6'] = $Prezzo;
                                    }
                                    else{
                                        echo "0 Prodotto Terminato";
                                    }
                                }
                                mysqli_close($conn);
                            ?>
                        <h2><?php echo $_SESSION['Marca6']. " ". $_SESSION['Modello6'] ?></h2>
                        <h2>Prezzo: <?php echo $_SESSION['Prezzo6'] ?> &euro; 
                        <h3>Disponibili: <?php echo $_SESSION['Disponibile6'] ?></h3>
                        <h3>Descrizione: Playstation 4 1TB</h3> 
                        <form action="Ordina.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php  echo $_SESSION['Disponibile6']?>">
                            <input type="submit" value="Acquista" name="Acquista6">
                        </form>
                        <form action="Carrello.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php echo $_SESSION['Disponibile6']?>">
                            <input type="submit" value="Aggiungi al Carrello" name="Carrello6">
                        </form>
                    </div>
                    </td>
                    <td>
                    <div style="float:left; padding-left:15px; padding-right:50px;">
                        <img src="img/Prodotto7.png" alt="Prodotto7">
                        <?php $conn = mysqli_connect("localhost", "root", "");
                            if (! $conn){
                                die('Errore durante la connessione: ' . mysqli_errno($conn));}
                            $db1 = mysqli_select_db($conn,'logicsystem');
                            if (!$db1){
                                die('Accesso al database non riuscito: ' . mysqli_errno($conn));}
                                $strSQL = "SELECT * From Prodotti WHERE ID_Prodotto = '7'";
                                $tabella = mysqli_query($conn, $strSQL);
                                while($row = mysqli_fetch_array($tabella)){
                                    if($row['Disponibile'] != 0){
                                        $Marca = $row['Marca'];
                                        $Modello = $row['Modello'];
                                        $Disponibile = $row['Disponibile'];
                                        $Prezzo = $row['Prezzo'];
                                        $_SESSION['Marca7'] = $Marca;
                                        $_SESSION['Modello7'] = $Modello;
                                        $_SESSION['Disponibile7'] = $Disponibile;
                                        $_SESSION['Prezzo7'] = $Prezzo;
                                    }
                                    else{
                                        echo "0 Prodotto Terminato";
                                    }
                                }
                                mysqli_close($conn);
                            ?>
                        <h2><?php echo $_SESSION['Marca7']. " ". $_SESSION['Modello7'] ?></h2>
                        <h2>Prezzo: <?php echo  $_SESSION['Prezzo7'] ?> &euro; 
                        <h3>Disponibili: <?php echo $_SESSION['Disponibile7'] ?></h3>
                        <h3>Descrizione: Iphone 13</h3> 
                        <form action="Ordina.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php  echo $_SESSION['Disponibile7']?>">
                            <input type="submit" value="Acquista" name="Acquista7">
                        </form>
                        <form action="Carrello.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php echo $_SESSION['Disponibile7']?>">
                            <input type="submit" value="Aggiungi al Carrello" name="Carrello7">
                        </form>
                    </div>
                    </td>
                    <td>
                    <div style="float:left; padding-left:15px; padding-right:15px;">
                        <img src="img/Prodotto8.png" alt="Prodotto8">
                        <?php $conn = mysqli_connect("localhost", "root", "");
                            if (! $conn){
                                die('Errore durante la connessione: ' . mysqli_errno($conn));}
                            $db1 = mysqli_select_db($conn,'logicsystem');
                            if (!$db1){
                                die('Accesso al database non riuscito: ' . mysqli_errno($conn));}
                                $strSQL = "SELECT * From Prodotti WHERE ID_Prodotto = '8'";
                                $tabella = mysqli_query($conn, $strSQL);
                                while($row = mysqli_fetch_array($tabella)){
                                    if($row['Disponibile'] != 0){
                                        $Marca = $row['Marca'];
                                        $Modello = $row['Modello'];
                                        $Disponibile = $row['Disponibile'];
                                        $Prezzo = $row['Prezzo'];
                                        $_SESSION['Marca8'] = $Marca;
                                        $_SESSION['Modello8'] = $Modello;
                                        $_SESSION['Disponibile8'] = $Disponibile;
                                        $_SESSION['Prezzo8'] = $Prezzo;
                                    }
                                    else{
                                        echo "0 Prodotto Terminato";
                                    }
                                }
                                mysqli_close($conn);
                            ?>
                        <h2><?php echo $_SESSION['Marca8']. " ". $_SESSION['Modello8'] ?></h2>
                        <h2>Prezzo: <?php echo $_SESSION['Prezzo8'] ?> &euro; 
                        <h3>Disponibili: <?php echo $_SESSION['Disponibile8'] ?></h3>
                        <h3>Descrizione:  Samsung S22</h3> 
                        <form action="Ordina.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php  echo $_SESSION['Disponibile8']?>">
                            <input type="submit" value="Acquista" name="Acquista8">
                        </form>
                        <form action="Carrello.php" method="post">
                            <input style="width: 120px;" type="number" name="Quantita" placeholder="Quantità" min="1" max="<?php echo $_SESSION['Disponibile8']?>">
                            <input type="submit" value="Aggiungi al Carrello" name="Carrello8">
                        </form>
                    </div>
                    </td>
                </tr>
        </div>
    </body>
</html>