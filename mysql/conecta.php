<?php
  $host = "localhost";
  $usuario = "root";
  $senha = "";
  $db = "test";
  $conn = mysqli_connect($host, $usuario, $senha, $db);
  if (!$conn) {
    die("Falha ao conectar com o servidor: " . mysqli_connect_error());
  }
  else {
    echo "Conexao efetuada com sucesso!";
  }

  //mysqli_close($conn);
?>
