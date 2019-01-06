<?php

//fetchrate.php

$connect = new PDO('mysql:host=localhost;dbname=manpower', 'root', '');

if(isset($_POST['index'], $_POST['job_id']))
{
 $query = "
 INSERT INTO ratings(job_id, rating) 
 VALUES (:job_id, :rating)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':job_id'  => $_POST['job_id'],
   ':rating'   => $_POST['index']
  )
 );
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'done';
 }
}


?>
