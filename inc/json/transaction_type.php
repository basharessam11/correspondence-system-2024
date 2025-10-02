    <?php
 
  include"../sql.php";
 
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

 
$sql->selectall("transaction_type");

$rows = array();

// Loop through each row in the result set
while ($row = $sql->res->fetch_assoc()) {
    // Add the row to the $rows array
    $rows[] = $row;
}

// print_r($rows);
// Encode the array of rows into a JSON string
echo$jsonString =  json_encode($rows) ;

 
?>  