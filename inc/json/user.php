    <?php
 
  include"../sql.php";
 
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

 
 $sql->selectjoin("  
  user.id ,
  user.name ,
  user.name_en ,
  user.user_name  ,
 
  user.file,
  user.phone,
  user.status,
  user.permissions,
 
  company.name AS company_name,
  company.name_en AS company_name_en
   

  "
  ,"user","
    company ON user.company_id = company.id 
   


    ");

$rows = array();

// Loop through each row in the result set
while ($row = $sql->res11->fetch_assoc()) {
 
    $rows[] = $row;
}

// print_r($rows);
// Encode the array of rows into a JSON string
echo$jsonString =  json_encode($rows) ;

 
?>  