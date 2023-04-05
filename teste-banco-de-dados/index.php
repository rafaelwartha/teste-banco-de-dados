<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_lista";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}

// Consulta SQL para selecionar todos os usuários
$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conn, $sql);

// Criação da tabela HTML para exibir os dados
echo "<table>";
echo "<tr><th>Nome</th><th>Idade</th><th>Telefone</th><th>E-mail</th></tr>";
while ($linha = mysqli_fetch_assoc($resultado)) {
  echo "<tr><td>".$linha['nome']."</td><td>".$linha['idade']."</td><td>".$linha['telefone']."</td><td>".$linha['email']."</td></tr>";
}
echo "</table>";

// Fechamento da conexão com o banco de dados
mysqli_close($conn);
?>
