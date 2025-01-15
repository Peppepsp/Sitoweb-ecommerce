<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Logic System Home Page</title>
    </head>
    <body>
        <?php 
           if(isset($_SESSION)){
            session_destroy();}
        ?>
        <nav>
            <a href="Index.php"> <img src="img/Logo.png" alt="Logo"></a>
            <ul>
                <li><a class="active" href="Index.php">Home</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="Registrazione.php">Registrati</a></li>
            </ul>
        </nav>
        <br>
        <br>
        <div id="divsfondo">
            <center>
            <img src="img/Logo Esteso.png" alt="Logo">
            <h2>La Nostra Azienda "Logic System" &egrave nata nel 1994 e ci siamo prefissi come obbiettivo di soddisfare le richieste sul campo Hardware Software dei nostri clienti, fornendo prodotti di ogni genere e variet&agrave.</h2>
            </center>
        </div>
    </body>
</html>
