 <?php 

require_once 'db_connect.php';


function showAllStudents(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `user_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showStudent($id){
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

function searchUser($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Username LIKE '%$user_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function add($data){
	$conn = db_conn();
    $selectQuery = "INSERT into Registration (Name, Address, Type, Email, Cnum, Password)
VALUES (:name, :address, :type, :email, :cnum, :pass)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':address' => $data['address'],
        	':type' => $data['type'],
        	':email' => $data['email'],
        	':cnum' => $data['cnum'],
        	':pass' => $data['pass']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function editProfile($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Name = ?, Address = ?, Type = ? Email = ? Cnum = ? where Password = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['address'], $data['type'], $data['email'],$data['cnum'],$data['password']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteStudent($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `user_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function fetchPass($email){
	$conn = db_conn();
	$selectQuery = "SELECT Password From Registration WHERE Email = ?";
	  try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
$row = $stmt->fetch(PDO::FETCH_ASSOC);
return $row;
	
}
function fetchProfile($email){
		$conn = db_conn();
	$selectQuery = "SELECT * From Registration WHERE Email = ?";
	  try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
$row = $stmt->fetch(PDO::FETCH_ASSOC);
return $row;
	
}
function changePass($npass,$email){
    $conn = db_conn();
    $selectQuery = "UPDATE registration set Password = ? where Email = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$npass, $email
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}