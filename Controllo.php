<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Logic System Controllo</title>
    </head>
    <body>
        <?php
            session_start();
            $conn = mysqli_connect("localhost", "root", "");
            if (! $conn){
                die('Errore durante la connessione: ' . mysqli_errno($conn));}
            $db1 = mysqli_select_db($conn,'logicsystem');
            if (!$db1){
                die('Accesso al database non riuscito: ' . mysqli_errno($conn));}
            $Email = $_POST["Email"];
            $Password = $_POST["Password"];
            $verifica = 0;
            $strSQL = "SELECT * From Utenti;";
            $tabella = mysqli_query($conn, $strSQL);
            while($row = mysqli_fetch_array($tabella)){
                if ($row['Email'] == $Email){
                    if(password_verify($Password, $row['Pass']) == true){
                        $IDUtente = $row['ID_Utente'];
                        $Nome = $row['Nome'];
                        $Cognome = $row['Cognome'];
                        $Indirizzo = $row['Indirizzo'];
                        $MetodoPagamento = $row['MetodoPag'];
                        $_SESSION['IDUtente'] = $IDUtente;
                        $_SESSION['Nome'] = $Nome;
                        $_SESSION['Cognome'] = $Cognome;
                        $_SESSION['Indirizzo'] = $Indirizzo;
                        $_SESSION['MetodoPagamento'] = $MetodoPagamento;
                        $verifica = 1;
                        header("location: Shop.php");
                    }
                }
			}
            if($verifica != 1){
                echo "Dati di accesso errati <br/>";
                ob_start();
                echo "Se il tuo browser non supporta il redirect fai click <a href=\"Login.php\">qui</a>.";
                header( "refresh:10;url=Login.php" );
                ob_end_flush();
            }
            mysqli_close($conn);
        ?>
    </body>
</html>