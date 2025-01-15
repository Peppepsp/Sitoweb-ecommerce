<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Logic System Login</title>
    </head>
    <body>
        <nav>
            <a href="Index.php"> <img src="img/Logo.png" alt="Logo"></a>
            <ul>
                <li><a href="Index.php">Home</a></li>
                <li><a class="active" href="Login.php">Login</a></li>
                <li><a href="Registrazione.php">Registrati</a></li>
            </ul>
        </nav>
        <br>
        <div id="divsfondo">
            <center>
            <h2>Effettua l'accesso al nostro sito</h2>
            <h3>Benvenuto, per procedere inserisci le tue credenziali</h3>
            <div id="div1" style="padding: 10px; width: 350px;">
                <form id="form1" action="Controllo.php" method="post">
                    <br>
                    <strong>
                        <table style="color:darkslategray;">
								<td>Email:</td>
								<td><input type="email" name="Email"></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="password" name="Password"></td>
							</tr>
						</table>
					</strong>
                    <br>
                    <input id="bottone" type="submit" value="Accedi">
                    <input id="bottone" type="button" value="Registrati" onclick="window.location.href='Registrazione.php'"/>
                </form>
            </div>
            </center>
        </div>
    </body>
</html>