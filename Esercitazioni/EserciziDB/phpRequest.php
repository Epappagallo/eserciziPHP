<?php  

require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO utenti (nome, email) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nome, $email);

    if ($stmt->execute()) {
        echo "Dati salvati con successo!";
    } else {
        echo "Errore: " . $stmt->error;
    }

    $stmt->close();
}

?>