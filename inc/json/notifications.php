    <?php
 // print_r($_POST);
include"../sql.php";
    $date1=$_GET['date1'];
    $date2=$_GET['date2'];
  
 
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");


 

 $sql->selectjoin("  
 
notifications.id,
    notifications.date,
    notifications.page,
    notifications.page_en,
    notifications.des,
    notifications.des_en,
    user.name,
    user.id as user_id,
    user.permissions AS permissions,
    user.name_en  
  "
  ,"notifications","
  
    user ON notifications.user_id = user.id
WHERE DATE(notifications.date) between  '$date1' and '$date2'; 

    ");

$rows = array();

// Loop through each row in the result set
while ($row = $sql->res11->fetch_assoc()) {
    // Add the row to the $rows array
    $rows[] = $row;
}

 
// print_r($rows);
// Encode the array of rows into a JSON string
echo$jsonString =  json_encode($rows) ;

 
?>  
