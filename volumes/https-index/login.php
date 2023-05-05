<?php
session_start();

if (isset($_SESSION['username'])) {
  header('Location: dashboard.php');
  exit;
}

$username = $password = '';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST['username']);
  $password = test_input($_POST['password']);

  // Verifique as credenciais do usuário
  if ($username == 'xpto' && $password == 'xpto') {
    // Armazene o nome de usuário na sessão
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
    exit;
  } else {
    $error = 'Utilizador ou senha incorretos';
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
  <title>Login</title>
</head>
<body>
<a href="https://www.enta.store/">
        <img src="img/Logo-ENTA.png" alt="Descrição da imagem" width="400" height="150" target="_blank">
      </a>
    
    <div>
	<h1>IP's INDEX</h1>
    <h1>Main IP: 10.0.5.113 <img src="img/server.png" alt="server" width="30" height="30" target="_blank"></h1>
  <h1>Login</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="username">Nome de utilizador:</label>
    <input type="text" name="username" id="username" value="<?php echo $username; ?>">
    <br><br>
    <label for="password">Senha:</label>
    <input type="password" name="password" id="password">
    <br><br>
    <input type="submit" value="Login">
    <br><br>
    <span style="color: red;"><?php echo $error; ?></span>
  </form>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="http://192.168.1.126:8080" target="_blank" class="btn btn-main">Main Server Diogo</a>
</body>
</html>
</body>
</html>
