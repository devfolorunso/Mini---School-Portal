<?php
if (isset($_POST['admit'])){
  extract($_POST);
  $uploadfile = $_FILES["passport"]["tmp_name"];
  $target = "passimg/".basename ($_FILES ['passport']['name']);
  $passport = $_FILES['passport']['name'];
  move_uploaded_file( $uploadfile , $target );
}?>
