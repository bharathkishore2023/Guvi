<?php
$host="localhost";
$username="root";
$password="";
$database="mypage";
$connect = mysqli_connect($host,$username,$password,$database);

$email=mysqli_real_escape_string($connect,$_POST['email']);
$pwd=mysqli_real_escape_string($connect,$_POST['password']);

mysqli_query($connect,"INSERT INTO 'subscribers' (email,passcode)
VALUES ('".$email."','".$pwd."')");

mysqli_close($connect);
?> 
// try
// {
//     $conn = mysqli_connect($host,$username,$password,$database);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo "connected successfully";
// }
// catch(PDOException $e)
// {
//     echo "Connection failed: " . $e->getMessage();
// }
// $emailId=isset($_POST['email']) ? $_POST['email']:'';
// $passwrd=isset($_POST['password'])? $_POST['password']:'';

// $ok =true;
// $messages=array();
// if(! isset($emailId) || empty($emailId)){
// $ok=false;
// $messages= 'Email cannot be empty';
// }
// if(! isset($passwrd) || empty($passwrd)){
//     $ok=false;
//     $messages= 'Password cannot be empty';
//     }

// if($ok){
//     if($emailId ==='dcode' && $passwrd){
//         $ok = true;
//         $messages[]='Incorrect email / password combination';
//     }
// }

// echo json_encode(
//     array(
//         'ok' => $ok,
//         'messages' => $messages
//     )
//     );
//     


