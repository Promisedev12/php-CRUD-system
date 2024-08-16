<?php
if (isset($_GET['query'])) {
  include "connect.php";
  $searchData = $_GET['query'];
  $query = "SELECT id, name, martricle, shift, contact, school, specialty FROM intern WHERE name LIKE '{$searchData}%';";
  $results = mysqli_query($conn, $query);
  $searchResults = [];
  if (mysqli_num_rows($results) > 0) {
    while ($row = $results->fetch_assoc()) {
      $searchResults[] = $row;
    }
  } else {
    $searchResults = "No student found";
  }
  header('Content-Type: application/json');
  echo json_encode($searchResults);
}
$conn->close();
