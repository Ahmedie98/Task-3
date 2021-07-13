<?php
//for motors
        $myRange1= $_POST['myRange1'];
        $myRange2= $_POST['myRange2'];
        $myRange3= $_POST['myRange3'];
        $myRange4= $_POST['myRange4'];
        $myRange5= $_POST['myRange5'];
        $myRange6= $_POST['myRange6'];

        $conn= new mysqli('127.0.0.1','root','','project2');
        if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into motors(myRange1, myRange2, myRange3, myRange4, myRange5, myRange6) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("iiiiii", $myRange1, $myRange2, $myRange3, $myRange4, $myRange5, $myRange6);
		$execval = $stmt->execute();
		echo $execval;
		echo "Data were added to the Database";
		$stmt->close();
		$conn->close();
	}

//for buttons



 ?>
