<?php
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit;
}

$username = $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ip = test_input($_POST["ip"]);
    if (!empty($ip)) {
        $ip = "http://" . $ip;
        echo "<meta http-equiv='refresh' content='0; url=$ip'>";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$db_server = 'db';
$db_name = 'mysql';
$db_user = 'root';
$db_pass = 'example';



//conexão com o banco de dados
$mysqli = new mysqli("db", "root", "example", "mysql");

//verifica se a conexão foi bem sucedida
if (!$mysqli) {
  die("Falha na conexão: " . mysqli_connect_error());
}

//executa a consulta SQL
$sql = "SELECT * FROM alunos"; //consulta SQL
$resultado = mysqli_query($mysqli, $sql);


//verifica se a consulta retornou algum resultado
if (mysqli_num_rows($resultado) > 0) {
  //exibe os dados em uma tabela
  while($linha = mysqli_fetch_assoc($resultado)) {
    echo "Estado: Recebendo ";
  }
} else {
  echo "Nenhum resultado encontrado.";
}

//fecha a conexão com o banco de dados
mysqli_close($mysqli);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
  <title>Dashboard</title>
</head>
<body>
<a href="https://www.enta.store/">
        <img src="img/Logo-ENTA.png" alt="Descrição da imagem" width="400" height="150" target="_blank">
      </a>
    <hr width="50%" color="black" size="5">
  <h1>Bem-vindo, <?php echo $username; ?>!</h1>
  <p>Esta é a página do dashboard. Onde se tem acesso a diversas coisas !</p>
  <hr width="50%" color="black" size="5">
  <a class="sub-menu, btn btn-main" href="logout.php">Logout</a>
  <br>
  <table>
</body>
<?php
   //conexão com o banco de dados
$mysqli = new mysqli("db", "root", "example", "mysql");

//verifica se a conexão foi bem sucedida
if (!$mysqli) {
  die("Falha na conexão: " . mysqli_connect_error());
}

//executa a consulta SQL
$sql = "SELECT * FROM alunos"; //consulta SQL
$resultado = mysqli_query($mysqli, $sql);


//verifica se a consulta retornou algum resultado
if (mysqli_num_rows($resultado) > 0) {
  //exibe os dados em uma tabela
  while($linha = mysqli_fetch_assoc($resultado)) {
    echo "ID: " . $linha["id"] . " - Nome: " . $linha["nome"] . " - E-mail: " . $linha["email"] . "<br>";
  }
} else {
  echo "Nenhum resultado encontrado.";
}

//fecha a conexão com o banco de dados
mysqli_close($mysqli); 
?>
</html>
