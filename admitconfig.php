<?php
if(isset($_POST) && !empty($_POST)){

foreach ($_POST as $key => $value)
{
  $$key = $value;

}

extract($_POST);


function insert($table, $data)
{
  $con = new mysqli("localhost","root","","cithub") or die("Connection failed");
  $query = "INSERT INTO ".$table."(";
    foreach($data as $key => $value)
    {
      $query .= $key.",";
    }

    $query = substr($query, 0, -1).") VALUES(";
    foreach($data as $key => $value)
    {
      $query .= "'".$value."',";
    }

    $query = substr($query, 0, -1).")";
    $con->query($query);

}

    echo insert("freshers",$_POST);
}

?>
