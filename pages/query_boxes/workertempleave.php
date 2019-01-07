<?php

	session_start();
	require_once '../../db_config/config.php';
	$workerID=$_SESSION['userID'];
    $jobID=$_SESSION['jobID'];


    $tempquery = "INSERT INTO worker_leaves (workerID,JobID,datetime) VALUES ('$workerID','$jobID',NOW())";

    $_SESSION['userStatus']='online';
    $userID=$_SESSION['userID'];
    $userType=$_SESSION['userType'];
    $notification=$userID." leaved from the job";
    if(mysqli_query($conn,$tempquery)){


    echo "
            <form method='post' action='insertnoti.php' id='comment_form'>
                <div class='form-group'>
                 <label>Enter Notification ID</label>
                 <input value='$userID' type='text' name='notificationID' id='notificationID' class='form-control'>
                </div>
                   <div class='form-group'>
                 <label>Enter User Type</label>
                 <input type='text' name='userType' value=2 id='userType' class='form-control'>
                </div>
                <div class='form-group'>
                 <label>Enter Notification</label>
                 <input value=' left from the job' name='notification' id='notification' class='form-control' rows='5'>
                </div>
                <div class='form-group'>
                 <input type='submit' name='post' id='post' class='btn btn-info' value='Post' />
                </div>
            </form>";


    echo "<script>
                document.getElementById('comment_form').submit();
           </script>";

    echo "<script>window.location.replace('../worker.php');alert('Temporary leave success');</script>";

}else{
    echo "<script>window.location.replace('../worker.php');alert('Try again!!!');</script>";
}

?>