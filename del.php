<?php 
include_once ('config.php');

$id = $_GET['id'];

$sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

$res = $conn->query($sqlSelect);

if($res->num_rows > 0) {

    $sqlDel = "DELETE FROM usuarios WHERE id=$id";
    $resDel = $conn->query($sqlDel);
}

if ($conn->query($sqlDel) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

header('Location: sis.php');
?>