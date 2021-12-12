<?php 
require_once 'DB_connect.php';

function showUser($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` where ID = ?";

 

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

 

    return $row;
}

function login($username,$password,$userType){
    $conn = db_conn();
    $sql = $conn->prepare("SELECT * FROM user_info WHERE username = ? and password = ?");
    $sql->bind_param("ss", $username,$password);
    $sql->execute();
    $result=$sql->get_result();
    return $result->num_rows === 1 ;

}

// function register($name, $username, $password, $User_type){
//     $conn =db_conn();
//     $sql = $conn->prepare("INSERT INTO user_info (name, username, password, rule) VALUES (?, ?, ?, ?)");
//     $sql-> bind_param("ssss",$name, $username, $password, $User_type);

//     $sql->execute();
//     $sql->close();
//     $conn->close();

// }


function addUser($data){
    $conn = db_conn();
    $selectQuery = "INSERT into user_info (name, email, usname, pass, gender, dd, mm, yy )
VALUES (:name,:email,:usname, :pass, :gender, :dd ,:mm, :yy)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':username' => $data['username'],
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':gender' => $data['gender'],
            ':dd' => $data['dd'],
            ':mm' => $data['mm'],
            ':yy' => $data['yy']
            
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

// function updateInfo($data){
//     $conn = db_conn();
//     $selectQuery = "UPDATE user_info set name = ?, email = ?, gender = ?, dd = ?, mm = ?, yy = ? where usname = ?";
//     try{
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([
          
//             $data['name'], $data['email'], $data['gender'], $data['dd'], $data['mm'], $data['yy'], $data['usname']
//         ]);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
    
//     $conn = null;
//     return true;
// }
function changepass($data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set pass = ? where pass = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['newpass'], $data['curpass']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function getProfileData($username)
	 {
 		$conn = db_conn();  
 		$statement = $conn->prepare("SELECT * FROM user_info WHERE username = ?");
 		$statement->bind_param("s", $username);
		$statement->execute(); 
		$records = $statement->get_result();
		return $records->fetch_all(MYSQLI_ASSOC); // associative array.
	} 
 


 	function updateProfile($name,$gender,$address,$email,$username,$dd, $mm, $yy)
	 {
 		$conn = db_conn(); 
 		$statement = $conn->prepare("UPDATE user_info SET name = ?,gender = ?, address = ?,email = ?,username = ?, dd =?, mm=?, yy=? WHERE Username = ?");  
	 	$statement->bind_param("sssssiii",$name,$gender,$address,$email,$username,$dd, $mm, $yy);
		return ($statement->execute()); 
 	}
 ?>
