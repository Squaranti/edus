<?php
include('db_connection.php');

  $sql = "SELECT cognome, nome, classe, materia, matricola FROM tutor";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          echo "<tr class='odd'><td class=''>" . $row["cognome"] . "</td><td class='center'>" . $row["nome"] . "</td><td class='center'> " . $row["classe"] . "</td><td class='center'><span class='center'>" . $row["materia"] . "</span></td><td class='center'><a class='btn btn-mini btn-success' href='http://apps.marconivr.it/timap/user/". $row["matricola"]. "'><i class='icon-zoom-in icon-white'></i>View</a></td></tr>";
      }
      echo "</table>";
  } else {
    $msg = "0 risultati trovati!";
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

$conn->close();


?>
