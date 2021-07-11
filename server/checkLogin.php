<?php  
session_start();
include "db_conn.php";
if (isset($_POST['ic']) && isset($_POST['tel'])) {
    
    //vaildation 
	function test_input($data) {
	  $data = trim($data);
	  $data = trim($data);
	  return $data;
	}

	$ic = test_input($_POST['ic']);
	$tel = test_input($_POST['tel']);

	if (empty($ic)) {
		header("Location: ../check.php?error=IC or Passport Number is Required");
	}else if (empty($tel)) {
		header("Location: ../check.php?error=telephone Number is Required");
	}else {
        
        $sql = "SELECT * FROM users WHERE ic='$ic' AND tel='$tel'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the IC must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['tel'] === $tel) {
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['ic'] = $row['ic'];

        		header("Location: ../welcome.php");

        	}else {
        		header("Location: ../check.php?error=Incorect IC or telephone");
        	}
        }else {
        	header("Location: ../check.php?error=Incorect IC number or telephone");
        }

	}
	
}else {
	header("Location: ../error.php");
}