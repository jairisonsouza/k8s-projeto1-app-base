<?
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'conexao.php';

$id = rand(1, 999);
$nome = $_POST["nome"];
$mensagem = $_POST["comentario"];

$query = "INSERT INTO mensagens(id, nome, mensagem) VALUES ('$id', '$nome', '$mensagem')";

if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}
?>
