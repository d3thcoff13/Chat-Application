<?php
$req = $_GET['req'];

$user = $_GET['user'];

if($req == 'send'){
	$msg = $_GET['msg'];
	$pass = $_GET['pass'];
}

if($req=='users'){

	$db = mysqli_connect('sql.njit.edu','th227','janice43','th227');
	if (!$db) {
	    die('Could not connect: ' . mysqli_error($db));
	}

	$q="SELECT name FROM th227.chat";
	$r = mysqli_query($db,$q);

	while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
		echo $row['name'] . ', ';
	}

	mysqli_close($db);


}else if($req == 'recieve'){
	$db = mysqli_connect('sql.njit.edu','th227','janice43','th227');
	if (!$db) {
	    die('Could not connect: ' . mysqli_error($db));
	}

	$q="SELECT * FROM th227.chat WHERE name = '". $user ."'";
	$r = mysqli_query($db,$q);

	$row = mysqli_fetch_array($r, MYSQLI_ASSOC);

	echo $row['chat_content'];

	mysqli_close($db);

}else if($req == 'send'){
	$db = mysqli_connect('sql.njit.edu','th227','janice43','th227');
	if (!$db) {
	    die('ERROR: Failed to connect to database. Your message is not currently being updated.');
	}

	$q="SELECT * FROM th227.chat WHERE name = '". $user ."'";
	
	$r = mysqli_query($db,$q);
	
	if($r){
		$row = mysqli_fetch_array($r, MYSQLI_ASSOC);

		if($row['password'] == $pass){
			$q="UPDATE th227.chat SET chat_content = '" . $msg . "' WHERE name = '". $user ."'";
			$r = mysqli_query($db,$q);

			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);

		}else{
			echo 'ERROR: Your username and password do not match. Your message is not currently being updated.';
		}
	}else{
		echo'ERROR: Failed to connect to database. Your message is not currently being updated.';
	}
	mysqli_close($db);
}
?>