<?php
  include "herobattles.php";

  if (isset($_GET["herobattles"])) {
    header("Content-Type: application/json");
    $requestedBattle = $_GET["herobattles"];
    if ($requestedBattle === "U0005") {
      echo json_encode($battles["U0005"]);
    }

    else if ($requestedBattle === "U0001") {
      echo json_encode($battles["U0001"]);
    }

    else if ($requestedBattle === "U0002") {
      echo json_encode($battles["U0002"]);
    }

    else if ($requestedBattle === "U0003") {
      echo json_encode($battles["U0003"]);
    }

    else if ($requestedBattle === "U0004") {
      echo json_encode($battles["U0004"]);
    }
    else if ($requestedBattle === "U0006") {
      echo json_encode($battles["U0006"]);
    }

    else if ($requestedBattle === "U0007") {
      echo json_encode($battles["U0007"]);
    }

    else if ($requestedBattle === "U0008") {
      echo json_encode($battles["U0008"]);
    }

    else if ($requestedBattle === "U0009") {
      echo json_encode($battles["U0009"]);
    }

    else if ($requestedBattle === "U0010") {
      echo json_encode($battles["U0010"]);
    }

    else if ($requestedBattle === "U0011") {
      echo json_encode($battles["U0011"]);
    }

    else if ($requestedBattle === "U0012") {
      echo json_encode($battles["U0012"]);
    }
  }
 ?>
