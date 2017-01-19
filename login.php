<?php
session_start();

// se vier um pedido para login
if (!empty($_POST)) {

	// estabelecer ligação com a base de dados
	mysql_connect('localhost', 'root', 'mysql') or die(mysql_error());
	mysql_select_db('registo');

	// receber o pedido de login com segurança
	$email = mysql_real_escape_string($_POST['email']);
	$password = sha1($_POST['pass']);

	// verificar o utilizador em questão (pretendemos obter uma única linha de registos)
	$login = mysql_query("SELECT FROM registo WHERE email = '$email' AND pass = '$password'");

	if ($login && mysql_num_rows($login) == 1) {

		// o utilizador está correctamente validado
		// guardamos as suas informações numa sessão
		$_SESSION['id'] = mysql_result($login, 0, 0);
		$_SESSION['username'] = mysql_result($login, 0, 1);

		echo "<p>Sess&atilde;o iniciada com sucesso como {$_SESSION['username']}</p>";
	} else {

		// falhou o login
		echo "<p>Utilizador ou password invalidos. <a href=\"login.php\">Tente novamente</a></p>";
	}
}
?>
