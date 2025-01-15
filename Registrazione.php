<html>
    <head>
		<link rel="stylesheet" href="style.css">
		<title>Logic System Sign Up</title>
	</head>
    <body>
		<nav>
            <a href="Index.php"> <img src="img/Logo.png" alt="Logo"></a>
            <ul>
                <li><a href="Index.php">Home</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a class="active" href="Registrazione.php">Registrati</a></li>
            </ul>
        </nav>
		<div id="divsfondo">
			<center>
			<h2>Inserisci i tuoi dati<br/></h2>
			<div id="div1" style="padding: 10px; width: 350px;">
				<form action="Inserimento.php" method="post">
						<strong><table style="color:darkslategray;">
							<tr>
								<td>Nome:</td>
								<td><input type="text" name="Nome"></td>
							</tr>
							<tr>
								<td>Cognome:</td>
								<td><input type="text" name="Cognome"></td>
							</tr>
							<tr>
								<td>Indirizzo:</td>
								<td><input type="text" name="Indirizzo"></td>
							</tr>
							<tr>
								<td>Email:</td>
								<td><input type="email" name="Email"></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="password" name="Password"></td>
							</tr>
							<tr>
								<td>Metodo di Pagamento:</td>
								<td><input type="text" name="MetodoPagamento"></td>
							</tr>
						</table>
					</strong>
					<input id="bottone" type="submit" value="Registrati">
				</form>
			</div>
			</center>
		</div>
    </body>
</html>