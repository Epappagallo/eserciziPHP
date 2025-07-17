<?php

$conn = new mysqli("localhost", "root", "", "scuola");

if ($conn->connect_error) {
    echo "Connessione fallita: " . $conn->connect_error;
} else {
    echo "Connessione riuscita!";
};

$sql = "SELECT id, nome, email FROM utenti";
$result = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['azione']) && $_POST['azione'] == "elimina") {
  $id = $_POST['id'];

  $sql = "DELETE FROM utenti WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);

  if ($stmt->execute()) {
      echo "<p style='color:green;'>Utente eliminato con successo!</p>";
  } else {
      echo "<p style='color:red;'>Errore durante l'eliminazione: " . $stmt->error . "</p>";
  }

  $stmt->close();
}

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Azioni</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>
            <form method='post' style='display:inline;'>
                <input type='hidden' name='azione' value='elimina'>
                <input type='hidden' name='id' value='" . $row["id"] . "'>
                <input type='submit' value='Elimina' onclick=\"return confirm('Sei sicuro di voler eliminare questo utente?');\">
            </form>
        </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nessun risultato";
}








