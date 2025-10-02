    <?php
 
 include"../sql.php";
      $date1=$_GET['date1'];
    $date2=$_GET['date2'];

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");


$sql->selectjoin("  
  outgoing.id ,
  outgoing.tarmez ,
  outgoing.num_id ,
  outgoing.subject,
  outgoing.subject_en,
  outgoing.user_id,
  outgoing.outgoing_date,
  transaction_type.name AS transaction_type_name,
  transaction_type.name_en AS transaction_type_name_en,
  importance.name AS importance_name,
  importance.name_en AS importance_name_en,
  dialect.name AS dialect_name,
  dialect.name_en AS dialect_name_en,
  user.name AS user_name,
  user.name_en AS user_name_en,
  confidentiality.name AS confidentiality_name,
  confidentiality.name_en AS confidentiality_name_en

  "
  ,"outgoing","
    transaction_type ON outgoing.transaction_type_id = transaction_type.id 
    INNER JOIN importance ON outgoing.importance_id = importance.id 
    INNER JOIN confidentiality ON outgoing.confidentiality_id = confidentiality.id 
    INNER JOIN dialect ON outgoing.dialect_id = dialect.id
    INNER JOIN user ON outgoing.user_id = user.id
    where
    outgoing.status=0 and 
    outgoing_date BETWEEN' $date1' AND '$date2'

    ");

$rows = array();

// Loop through each row in the result set
while ($row = $sql->res11->fetch_assoc()) {
    // Add the row to the $rows array
    $rows[] = $row;
}


// print_r($rows);
// Encode the array of rows into a JSON string
echo  json_encode($rows) ;

 
?>  