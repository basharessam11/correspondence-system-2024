<?php

error_reporting(0);
 date_default_timezone_set('Asia/Kuwait');
class fun
	{

		public $conn;
		public $res;
		public $res1;
		public $res2;
		public $res3;
		public $res4;
		public $res5;
		public $res_sum;
		public $res_avg;
		public $error=[];
		public $check;

		#######################CONNECT SQL#########################
	   
		function __construct($server,$user,$password,$name)
		{

			
			$this->conn    = new mysqli($server,$user,$password,$name);

			$this->conn->set_charset("utf8mb4");
			// $this->conn->set_charset("utf8_general_ci");
	
		}
		#######################END CONNECT SQL######################
		////////////////////////////////////////////////////////////		
		#######################Check###########################
		public function check($name,$array){
 				//check name
	 		$val           = [];
	 		foreach ($array as $key => $value) {

	 			$keys      = $key."= '".$value."'";

	 				array_push($val, $keys);
	 		}
			
			$value         = implode(" and ", $val);

			$this->select($name,"where $value");

			$this->check   = $this->res->num_rows;
		
		
			// end check name
 		}
		#######################END Check#######################
		////////////////////////////////////////////////////////////		
		#######################SELECT ALL###########################
		public function selectall($name){
	
			 $sql           = "SELECT * FROM $name";

			$res           = $this->conn->query($sql);

			$this->res     = $res;
	
		}
		#######################END SELECT ALL#######################
		////////////////////////////////////////////////////////////		
		#######################SELECT join###########################
		public function selectjoin($colum,$name,$join){
	
			$sql         = " SELECT $colum FROM $name INNER JOIN $join  ";

			$res11           = $this->conn->query($sql);
			$this->res11     = $res11;
	
		}
		#######################END SELECT join#######################
		////////////////////////////////////////////////////////////
		#######################SELECT WEHER#########################
	
		public function select($name,$where){
	
			$sql           = "SELECT * FROM $name $where";

			$res           = $this->conn->query($sql);

			$this->res     = $res;
	
		}
	
		#######################END SELECT WEHER######################
		/////////////////////////////////////////////////////////////
		#######################SELECT1 WEHER#########################
	
		public function select1($name,$where){
	
			$sql           = "SELECT * FROM $name $where";

			$res1          = $this->conn->query($sql);

			$this->res1    = $res1;
	
		}
	
		#######################END SELECT1 WEHER#####################
		/////////////////////////////////////////////////////////////
		#######################SELECT2 WEHER#########################
	
		public function select2($name,$where){
	
			$sql           = "SELECT * FROM $name $where";

			$res2          = $this->conn->query($sql);

			$this->res2    = $res2;
	
		}
	
		#######################END SELECT2 WEHER######################
		//////////////////////////////////////////////////////////////
		#######################SELECT3 WEHER##########################
	
		public function select3($name,$where){
	
			$sql           = "SELECT * FROM $name $where";

			$res3          = $this->conn->query($sql);

			$this->res3    = $res3;
	
		}
	
		#######################END SELECT3 WEHER######################
		//////////////////////////////////////////////////////////////
		#######################SELECT4 WEHER##########################
	
		public function select4($name,$where){
	
			$sql           = "SELECT * FROM $name $where";

			$res4          = $this->conn->query($sql);

			$this->res4    = $res4;
	
		}
	
		#######################END SELECT4 WEHER######################
		//////////////////////////////////////////////////////////////
		#######################SELECT5 WEHER##########################
	
		public function select5($name,$where){
	
			$sql           = "SELECT * FROM $name $where";

			$res5          = $this->conn->query($sql);

			$this->res5    = $res5;
	
		}
	
		#######################END SELECT5 WEHER######################
		//////////////////////////////////////////////////////////////
		#######################SELECT SUM#############################
	
		public function select_sum($sum,$name,$where){
	
			$sql           = "SELECT SUM($sum) FROM $name $where";

			$res           = $this->conn->query($sql);

			$this->res_sum = $res;
	
		}
	
		#######################END SELECT SUM########################
		/////////////////////////////////////////////////////////////
		#######################SELECT AVG############################
	
		public function select_avg($avg,$name,$where){
	
			$sql           = "SELECT AVG($avg) FROM $name $where";

			$res           = $this->conn->query($sql);

			$this->res_avg = $res;
	
		}
	
		#######################END SELECT AVG########################
		/////////////////////////////////////////////////////////////
		#######################INSERT################################
	
		public function insert($name,$array){

			$key  		   = array_keys($array);
			$keys          = implode(",", $key);

			$value         = array_values($array);
			$values        = implode("','", $value);

			 $sql           = "INSERT INTO $name ($keys) VALUES ('$values')";

			$this->conn->query($sql);
			
	
		}
	
		#######################END INSERT############################
		/////////////////////////////////////////////////////////////
		#######################INSERT IMG############################
	
		public function insert_img($name,$array,$img_name,$img_size,$img_temp){

			$key  		   = array_keys($array);
			$keys          = implode(",", $key).",file";

			$value         = array_values($array);
			$values        = implode("','", $value);

			$new_name      = [];

			$x             =0;

			foreach ($img_name as $key => $value) {

				$exp       = pathinfo($value, PATHINFO_EXTENSION); 


				$array_ex  = ["pdf","PDF","jpg","JPG","jpeg","JEPG","png","PNG"];

				if (in_array($exp,$array_ex)) {

					if ($img_size[$x]> 10000000) {

						array_push($this->error, "img=size");

					}else{

					$round = "img".random_int(0, 1000).time().".".$exp;

						if ( empty($this->error) ) {
							chmod("img", 0664);

							rename($img_temp[$x], "img/".$round);

							array_push($new_name, $round);

						}
						



					}

					

				}else{
					  
					if (!in_array("img=exp", $this->error)) {

						array_push($this->error, "img=exe");

					}

					
				}

				$x++;
			}

		//	print_r($new_name);
		//	print_r($this->error);

					if ( empty($this->error) ) {

				$imp_img   = implode(",", $new_name);

				$sql       = "INSERT INTO $name ($keys) VALUES ('$values','$imp_img')";

				$this->conn->query($sql);

					}else{

						echo "error exe";

					}

		}
	
		#######################END INSERT IMG########################
		/////////////////////////////////////////////////////////////
		#######################INSERT FILE############################
	
		public function insert_file($name,$array,$file_name,$file_size,$file_temp){

			$key  		   = array_keys($array);
			$keys          = implode(",", $key).",file";

			$value         = array_values($array);
			$values        = implode("','", $value);

			$new_name      = [];

			$x             =0;

			foreach ($file_name as $key => $value) {

				$exp       = pathinfo($value, PATHINFO_EXTENSION); 

				// print_r($exp);
				 
				$array_ex  = ["pdf","PDF","txt","TXT","jpg","JPG","jpeg","JEPG","png","PNG"];

				if (in_array($exp,$array_ex)) {

					if ($file_size[$x]> 10000000) {

						array_push($this->error, "file=size");

					}else{

					$round = "file".random_int(0, 1000).time().".".$exp;

						if ( empty($this->error) ) {

							 
							$path ="file/".$round;
							rename($file_temp[$x], $path);
							 
							  chmod($path, 0644); 
							array_push($new_name, $round);

						}
						



					}

					

				}else{
					  
					if (!in_array("file=exp", $this->error)) {

						array_push($this->error, "file=exe");

					}

					
				}

				$x++;
			}

		//	print_r($new_name);
		//	print_r($this->error);

					if ( empty($this->error) ) {

				$imp_file  = implode(",", $new_name);

				 $sql       = "INSERT INTO $name ($keys) VALUES ('$values','$imp_file')";

				$this->conn->query($sql);

					}else{

						echo "error exe";

					}

		}
	
		#######################END INSERT FILE########################
		/////////////////////////////////////////////////////////////
		#######################UPDATE FILE############################
	
		public function UPDATE_file($name,$id,$array,$last_file,$file_name,$file_size,$file_temp){

			

			$val           = [];

			foreach ($array as $key => $value) {

				array_push($val, $key." = '".$value."'");

			}

			 $data         = implode(",", $val);


			if (empty($file_name[0])) {

			 $sql          = "UPDATE  $name set $data  where id=$id";

			 $this->conn->query($sql);

			}else{

			$new_name      = [];

			$x             =0;

			foreach ($file_name as $key => $value) {

				$exp       = pathinfo($value, PATHINFO_EXTENSION); 

				//exe
				$array_ex  = ["pdf","PDF","txt","TXT","jpg","JPG","jpeg","JEPG","png","PNG"];

				if (in_array($exp,$array_ex)) {

					if ($file_size[$x]> 10000000) {

						array_push($this->error, "file=size");

					}else{

					$round = "file".random_int(0, 1000).time().".".$exp;

						if ( empty($this->error) ) {
							
							$path ="file/".$round;
							rename($file_temp[$x], $path);
							 
							  chmod($path, 0644); 
 
							array_push($new_name, $round);

						}
	
					}

				}else{
					  
					if (!in_array("file=exp", $this->error)) {

						array_push($this->error, "file=exe");

					}
	
				}

				$x++;
			}

					if ( empty($this->error) ) {

						$un    = explode(",", $last_file);

						foreach ($un as $key => $value) {

							unlink("file/$value");

						}

					$imp_file  = implode(",", $new_name);

					$sql       = "UPDATE  $name set $data,file='$imp_file' where id=$id";

			 		$this->conn->query($sql);
				
					}else{

						echo "error exe";

					}

			}

		}
	
		#######################END UPDATE FILE########################
		/////////////////////////////////////////////////////////////
		#######################UPDATE################################
	
		public function update($name,$array,$where){

			 $val          = [];

			foreach ($array as $key => $value) {

				array_push($val, $key." = '".$value."'");

			}

			// print_r($val);
			 $data         = implode(",", $val);
			
			 $sql          = "UPDATE  $name set $data $where";

			 $this->conn->query($sql);
				
		}
	
		#######################END UPDATE############################
		/////////////////////////////////////////////////////////////
		#######################DELETE################################
	
		public function delete($name,$where){
					
			 $sql          = "DELETE FROM $name  $where";

			 $this->conn->query($sql);
				
		}
	
		#######################END DELETE############################
		/////////////////////////////////////////////////////////////

	}



		#######################CONNECT SQL###########################
	   
		  $sql = new fun("localhost","root","","sader");
		   // $sql = new fun("localhost","icankuwa_sader","lp]udmk%#4;z","icankuwa_sader");

		#######################END CONNECT SQL#######################
		////////////////////////////////////////////////////////////		
		#######################SELECT ALL############################

		// $sql->select_all("cat");

		// while ($row = $sql->res_all->fetch_assoc()) {
			
		// 	echo $row["name"]."<br>";

		// }

		#######################END SELECT ALL########################
		/////////////////////////////////////////////////////////////
		#######################SELECT WEHER##########################

		// $sql->select("cat","where 1=1");

		// while ($row = $sql->res->fetch_assoc()) {
			
		// 	echo $row["name"]."<br>";

		// }

		#######################END SELECT WEHER######################
		/////////////////////////////////////////////////////////////
		#######################SELECT SUM############################

		// $sql->select_sum("id","cat","where 1=1");

		// while ($row = $sql->res_sum->fetch_assoc()) {
			
		// 	echo $row["SUM(id)"];

		// }
		#######################END SELECT SUM########################
		/////////////////////////////////////////////////////////////
		#######################SELECT AVG############################

		// $sql->select_avg("id","cat","where 1=1");

		// while ($row = $sql->res_avg->fetch_assoc()) {
			
		// 	echo $row["AVG(id)"];

		// }

		#######################END SELECT AVG########################
		/////////////////////////////////////////////////////////////
		#######################INSERT################################

		// $sql->insert("cat",["name"=>"bashar"]);

		#######################END INSERT############################
		/////////////////////////////////////////////////////////////
		#######################INSERT IMG############################

		// $tmp=$_FILES['file1']['tmp_name'];
		// $name=$_FILES['file1']['name'];
		// $size=$_FILES['file1']['size'];

		// $sql->insert_img("cat",["name"=>"bashar"],$name,$size,$tmp);

		#######################END INSERT IMG########################
		/////////////////////////////////////////////////////////////
		#######################INSERT FILE############################

		// $tmp=$_FILES['file1']['tmp_name'];
		// $name=$_FILES['file1']['name'];
		// $size=$_FILES['file1']['size'];

		// $sql->insert_file("cat",["name"=>"bashar"],$name,$size,$tmp);

		#######################END INSERT FILE########################
		/////////////////////////////////////////////////////////////
		#######################UPDATE################################

		// $sql->update("cat",["name"=>"bashar11"],"where name='bashar'");

		#######################END UPDATE############################
		/////////////////////////////////////////////////////////////
		#######################UPDATE################################
		// $tmp=$_FILES['file1']['tmp_name'];

		// $name=$_FILES['file1']['name'];
		
		// $size=$_FILES['file1']['size'];

		// $sql->select("cat","where id=20558");

		// while ($row = $sql->res->fetch_assoc()) {
			
		// 	$file= $row["file"];

		// }
		// $sql->update_file("cat","20558",["name"=>"bashar11"],"$file",$name,$size,$tmp);

		#######################END UPDATE############################
		/////////////////////////////////////////////////////////////
		#######################DELETE################################

		// $sql->delete("cat","where name='bashar11'");

		#######################END DELETE############################
		/////////////////////////////////////////////////////////////
?>