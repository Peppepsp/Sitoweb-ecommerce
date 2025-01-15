<html>
    <head>
        <title>Logic System Inserimento Nuovo Utente</title>
    </head>
    <body>
        <?php
            $conn = mysqli_connect("localhost", "root", "");
            if (! $conn){
                die('Errore durante la connessione: ' . mysqli_errno($conn));}
            $db1 = mysqli_select_db($conn,'logicsystem');
            if (!$db1) {
                die('Accesso al database non riuscito: ' . mysqli_errno($conn));}
            $Nome = $_POST["Nome"];
            $Cognome = $_POST["Cognome"];
            $Indirizzo = $_POST["Indirizzo"];
            $Email = $_POST["Email"];
            $Password = $_POST["Password"];
            $MetodoPagamento = $_POST["MetodoPagamento"];
            $Hash = password_hash($Password, PASSWORD_DEFAULT);
                $strSQL = "INSERT INTO Utenti (Nome,Cognome,Indirizzo,Email,Pass,MetodoPag) VALUES ('$Nome','$Cognome','$Indirizzo','$Email','$Hash','$MetodoPagamento');";
                if (mysqli_query($conn, $strSQL)) {
                    header("location: Login.php");}
                else {
                    echo "Errore nell'inserimento: " . mysqli_errno($conn);}
            mysqli_close($conn);
        ?>
        <form action="Index.php">
            <input id="bottone" type="submit" value="Pagina Principale">
        </form>
    </form>
</body>
</html>