<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "project2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    echo "توجد مشكلة في الاتصال: " . $conn->connect_error;
}
else
{
echo "تم الاتصال بنجاح";
}

if(isset($_POST['forward'])){

    $my_query = "select * from move WHERE #1 ";
    $result = mysqli_query($conn, $my_query);



}else if(isset($_POST['right1'])){

    $my_query = "select * from move #=2 ";
    $result = mysqli_query($conn, $my_query);



}else if(isset($_POST['left1'])){

    $my_query = "select * from move #=3 ";
    $result = mysqli_query($conn, $my_query);



}else if(isset($_POST['stop'])){

    $my_query = "select * from move #=5 ";
    $result = mysqli_query($conn, $my_query);


}else if(isset($_POST['backward'])){

    $my_query = "select * from move #=4 ";
    $result = mysqli_query($conn, $my_query);


}
?>
