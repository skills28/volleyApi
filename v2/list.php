<?php

include("../conn/conn.php");
$capitals = array();

$query = "SELECT * FROM country_capital ORDER BY id ASC";

//$result = mysqli_query($conn, $sql);
$result = $conn->query($query);

if ($result->num_rows > 0) {

   $response["capitals"] = array();
   while($row = $result->fetch_assoc()) {

      $data = array();

      $data["id"]=$row["id"];
      $data["country_name"]=$row["country_name"];
      $data["capital_name"]=$row["capital_name"];
      array_push($response["capitals"], $data);

  }

  if($result){
     $response["success"] = 1;
     $response["message"] = "Successfully Displayed";
     echo json_encode($response);
    }
    else{
     $response["success"] = 0;
     $response["message"] = "Try Again";
     echo json_encode($response);
    }
  }
  else {
   // no results found
   $response["success"] = 0;
   $response["message"] = "No Details Found";
   echo json_encode($response);
  }

$conn->close();
?>
