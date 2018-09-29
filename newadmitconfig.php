<?php
if(isset($_POST) && !empty($_POST)){
extract($_POST);
extract($_FILES);
$genpass = (mt_rand(0,62018));
$pass= "CiT" .$genpass ."HUB";
$uploadfile = $_FILES["passport"]["tmp_name"];
$target = "passimg/".basename ($_FILES ['passport']['name']);
$ipassport = $_FILES['passport']['name'];
move_uploaded_file( $uploadfile , $target );
$query = "INSERT INTO freshers
(surname, first_name, othername, passport, gender, marital_status, dob, sog, nationality, pob, contact_address, email, password, tel, next_of_kin, nok_address, nok_tel, programme, deprtment)
VALUES
('$surname', '$first_name', '$othername', '$ipassport', '$gender','$marital_status', '$dob', '$sog', '$nationality', '$pob', '$contact_address', '$email', '$pass', '$tel', '$next_of_kin','$nok_address', '$nok_tel', '$programme',  '$department')";
if (mysqli_query($con, $query)){
  echo "YOUR PASSWORD IS   <p>  " . $pass . " </p> KINDLY <a href='portallogin.php'>LOGIN TO CONTINUE</a></p>";
}
else{
echo "<font color='#660000'>Error!!! NOT REGISTERED</font> " . mysqli_error($con);
}
}


mysqli_close($con);


 ?>
