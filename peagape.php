<?php
$conn = mysqli_connect('localhost', 'root', 'GHSgustasan0110850', 'iservice');
if (!$conn) {
    die('Could not connect: ');
}

$sql = 'INSERT INTO cliente_empresa(nome, email, telefone, cnpj, senha, ramo, cidade, estado, endereço) values("' . $_POST["name"] . '","' . $_POST["email"] . '","' . $_POST["tel"] . '","' . $_POST["cnpj"] . '","' . $_POST["password"] . '","' . $_POST["ramo"] . '","' . $_POST["cidade"] . '","' . $_POST["estado"] . '","' . $_POST["endereco"] . '")';

if ($conn->query($sql) === TRUE) {
    echo "Enviado com sucesso as informações do formulário!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>