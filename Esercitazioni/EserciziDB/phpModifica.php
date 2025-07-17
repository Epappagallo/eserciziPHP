<?php 

require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['azione'] == "modifica") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE utenti SET nome = ?, email = ? WHERE id = ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param("ssi", $nome, $email, $id);

    if ($statement->execute()) {
        echo "Dati modificati con successo!";
    } else {
        echo "Errore: " . $stmt->error;
    }

    $stmt->close();
}


?>